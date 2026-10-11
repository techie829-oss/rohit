<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NewProjectsBlogSeeder extends Seeder
{
    public function run(): void
    {
        $contentDine = <<<'EOD'
In high-volume dining environments, every second counts. A delay of 30 seconds between a captain taking an order and the kitchen receiving the ticket creates bottlenecks during peak lunch and dinner rushes. Traditional desktop POS software installed on local Windows PCs suffers from multi-terminal synchronization lag and cannot bridge the gap to customer smartphone ordering.

When designing **Solidrix Dine**, our objective was clear: build a unified, cloud-native restaurant operations suite where floor captains, billing operators, kitchen stations, and customers ordering via table QR codes all interact with a single, real-time shared state.

### 1. The Core Architecture & Event-Driven Pipeline

Solidrix Dine is built on a modern decoupled stack:
- **Frontend POS & KDS**: React 18 with Vite and Tailwind CSS for instant UI rendering.
- **Real-Time Gateway**: Node.js & Express server paired with Socket.io cluster.
- **Persistence Layer**: MySQL with optimized indexing on table IDs, active order states, and shift logs.
- **Containerized Infrastructure**: Dockerized services orchestrated behind Nginx reverse proxy with SSL termination.

```
[Customer Table QR Code] ──┐
                           ▼
[Captain Mobile Device] ──► [Socket.io Event Gateway] ──► [Redis Pub/Sub]
                           ▲                                     │
[Cashier Desktop POS]   ───┘                                     ▼
                                                     [Kitchen Display Screens (KDS)]
                                                     [Thermal ESC/POS Printers]
```

### 2. Instant Bidirectional KOT Synchronization

When a customer places an order via table QR or a waiter taps 'Send to Kitchen', an atomic payload is emitted through Socket.io:

```javascript
// Client-side order emission
socket.emit('order:create', {
  tableId: 'table-12',
  orderId: 'ORD-9842',
  items: [
    { itemId: 104, name: 'Truffle Mushroom Risotto', qty: 2, notes: 'Less pepper' },
    { itemId: 88, name: 'Berry Iced Tea', qty: 2, notes: 'Less ice' }
  ],
  timestamp: Date.now()
});
```

The server validates inventory availability and broadcasts the event directly to the matching preparation stations (Bar Station vs. Main Kitchen):

```javascript
// Node.js Event Routing by Kitchen Station
io.to(`outlet_${outletId}_kitchen`).emit('kot:new', {
  kotId: generatedKotId,
  tableNumber: table.number,
  items: filteredKitchenItems,
  urgency: 'normal'
});
```

### 3. Contactless QR Table Ordering with Dynamic Session IDs

To prevent malicious orders and ensure customers only order for their seated session:
1. Each physical table has a unique cryptographic QR token linked to its ID.
2. When scanned, the customer enters an isolated session.
3. Digital carts can be viewed and added to collaboratively by multiple diners at the same table in real-time.
4. When confirmed, the session order merges directly into the running bill for that table.

### 4. Thermal Receipt Printing via ESC/POS Protocol

Restaurant billing requires instantaneous hardware printing. Solidrix Dine supports both raw network socket printing (over local port 9100) and Web USB ESC/POS driver integration, enabling sub-second generation of 80mm kitchen tickets and GST-compliant final tax invoices.

### Summary

By leveraging WebSockets and decoupled reactive micro-components, Solidrix Dine reduces order dispatch latency to under 200 milliseconds, eliminating verbal communication errors between floor staff and kitchen chefs.
EOD;

        $contentWhatsMeet = <<<'EOD'
With over 2.5 billion active users globally, WhatsApp has evolved from a personal messaging app into the primary sales, lead conversion, and customer support portal for high-growth businesses. However, managing conversations at scale presents severe technical challenges: handling unexpected webhook bursts from Meta, preventing phone number tier suspensions, and routing multi-agent responses without collisions.

To solve this, we engineered **Solidrix WhatsMeet**—an enterprise WhatsApp CRM and marketing automation engine built directly on Meta's official Cloud API v20.

### 1. Resilient Inbound Webhook Ingestion Pipeline

Meta requires webhooks to return an HTTP `200 OK` within seconds. If your application attempts to execute heavy database queries or CRM business logic synchronously inside the webhook request, Meta will timeout, flag the endpoint as unhealthy, and trigger cascading retries.

In WhatsMeet, we adopted an asynchronous, event-driven ingestion strategy:

```php
// Inbound Webhook Controller
public function handleWebhook(Request $request)
{
    $payload = $request->all();

    // Verify Meta payload structure
    if (isset($payload['entry'][0]['changes'][0]['value']['messages'])) {
        // Immediately push raw payload to Redis Queue for async processing
        ProcessWhatsAppWebhookJob::dispatch($payload)->onQueue('whatsapp-inbound');
    }

    // Acknowledge immediately to Meta
    return response('EVENT_RECEIVED', 200);
}
```

### 2. Multi-Agent Shared Team Inbox Architecture

A critical requirement for enterprise support is preventing two agents from replying to the same customer simultaneously. WhatsMeet implements real-time agent presence detection using WebSockets:
- **Agent Lock System**: When an agent opens an active chat, a Redis key is locked (`chat:lock:{conversation_id}`) with an auto-expiring TTL.
- **Live Typing Indicator**: Other team members see who is currently viewing or drafting a reply.
- **Internal Private Notes**: Support agents can leave internal notes visible only to their team within the customer timeline.

### 3. Visual Chatbot Automation Flow Engine

WhatsMeet features a visual condition-based flow builder that allows non-technical business managers to design automated customer journeys:
1. **Trigger**: Inbound message containing keyword or regex pattern.
2. **Conditional Gateways**: Check customer tags (e.g., 'VIP Customer' vs 'New Lead').
3. **Interactive Components**: Render native WhatsApp Interactive Buttons or List Pickers for friction-free selections.
4. **Fallback Handler**: Transfer conversation seamlessly to a human agent when intent falls below confidence threshold.

### 4. Bulk Broadcast Scheduling with Meta Rate-Limit Compliance

Broadcasting promotional updates to 50,000 opt-in subscribers requires strict adherence to Meta's messaging tiers (1K, 10K, 100K messages per 24 hours). We built a dynamic queue throttling engine in Laravel:

```php
// Dynamic rate-limited dispatcher
Redis::throttle('whatsapp-broadcast')
    ->allow(80) // 80 messages per second
    ->every(1)
    ->then(function () use ($contact, $template) {
        $this->whatsappService->sendTemplate($contact->phone, $template);
    }, function () {
        // Release back to queue with short backoff
        return $this->release(2);
    });
```

### Conclusion

By decoupling ingestion from processing via Redis queues and maintaining real-time multi-agent sync, WhatsMeet achieves 99.9% uptime and processes tens of thousands of WhatsApp customer interactions daily with sub-second responsiveness.
EOD;

        $contentOfflinePOS = <<<'EOD'
Restaurant networks are notoriously unpredictable. Internet outages, kitchen microwave interference with Wi-Fi signals, and router resets happen at the worst possible times. If a restaurant's POS crashes or freezes during an internet outage, guests cannot pay, kitchens cannot fulfill tickets, and operations grind to a halt.

While developing **Solidrix Dine**, we implemented an offline-first architecture that guarantees the POS terminal continues functioning even when the internet connection drops completely.

### 1. IndexedDB Local State Caching

We utilize IndexedDB wrapped in local repositories to persist:
- Full menu catalog, categories, pricing, and modifier groups.
- Active dining room table states and floor configurations.
- Local order queue with cryptographic UUIDs generated on the device.

When a cashier completes a bill while offline:
1. The order record is written to local IndexedDB marked as `sync_status = 'pending'`.
2. The bill total, taxes, and payment mode are captured locally.
3. The thermal receipt prints immediately over local network LAN or USB.

```javascript
// Offline-first order dispatch
async function saveOrderOfflineFirst(orderData) {
  const localOrder = {
    ...orderData,
    id: crypto.randomUUID(),
    syncStatus: navigator.onLine ? 'synced' : 'pending',
    createdAt: new Date().toISOString()
  };

  await db.orders.add(localOrder);

  if (navigator.onLine) {
    await syncOrderToCloud(localOrder);
  } else {
    registerSyncTask();
  }
  return localOrder;
}
```

### 2. Reconciliation & Conflict Resolution

When internet connectivity is restored, a background synchronization worker kicks in:
- Orders are transmitted in strict sequence of their creation timestamps.
- Stock counters and daily revenue ledgers update idempotently using UUID verification to prevent duplicate charges.

This architecture ensures zero operational downtime, making Solidrix Dine battle-tested for high-pressure restaurant environments.
EOD;

        $contentWebhooks = <<<'EOD'
Modern SaaS platforms rely heavily on third-party webhooks—from payment notifications (Stripe, Razorpay) to messaging events (Meta WhatsApp, Twilio). The challenge with webhooks is that traffic patterns are completely asynchronous and bursty. A single promotional broadcast or seasonal flash sale can trigger thousands of webhooks per second directed at your server.

If your API handles each webhook with a standard database transaction, your MySQL connection pool can become exhausted within seconds, resulting in `504 Gateway Timeout` errors.

### 1. The Bottleneck: Direct Database Writes

A typical naive controller does the following:
1. Receives HTTP POST request.
2. Begins MySQL transaction.
3. Updates customer record or order status.
4. Writes an audit log.
5. Returns HTTP 200.

Under high concurrency, table locks and connection pooling limits cause request queues to pile up in Nginx and PHP-FPM.

### 2. The Solution: Ingestion-Worker Decoupling with Redis Streams

In our production systems at Solidrix, we decouple ingestion from processing using Redis Streams:
- The API endpoint only validates HMAC signatures and pushes the raw event into a Redis Stream.
- Response time is consistently under 10 milliseconds.
- Dedicated Laravel daemon queue workers read batches from the stream using consumer groups, maintaining steady, controlled throughput to MySQL.

```php
// Ultra-fast Redis Stream ingestion
public function ingestWebhook(Request $request)
{
    // Verify signature
    $this->validateSignature($request);

    // Append to Redis Stream
    Redis::xadd('stream:webhooks', '*', [
        'event' => $request->input('event'),
        'payload' => json_encode($request->all()),
        'timestamp' => microtime(true)
    ]);

    return response()->json(['status' => 'queued'], 200);
}
```

This pattern provides maximum resiliency, zero dropped events, and smooth resource utilization across our backend infrastructure.
EOD;

        $blogs = [
            [
                'title' => 'Architecting Solidrix Dine: Real-time Kitchen Display System (KDS) & QR Ordering with WebSockets',
                'category' => 'Hospitality SaaS & POS',
                'image' => 'assets/img/projects/solidrix-dine.png',
                'summary' => 'How we engineered an ultra-low latency restaurant POS and contactless QR table ordering system using React, Node.js, and bidirectional Socket.io synchronization.',
                'content' => $contentDine,
                'author' => 'Rohit Kumar (Coolhax RK)',
                'published_at' => Carbon::now(),
            ],
            [
                'title' => 'Scaling Enterprise WhatsApp CRM: How WhatsMeet Manages 100K+ Messages with Meta Cloud API & Laravel Queues',
                'category' => 'Conversational AI & CRM',
                'image' => 'assets/img/projects/solidrix-whatsmeet.png',
                'summary' => 'A deep dive into building an enterprise multi-agent WhatsApp CRM: asynchronous webhook ingestion, visual chatbot flow builders, and compliant bulk broadcast scheduling.',
                'content' => $contentWhatsMeet,
                'author' => 'Rohit Kumar (Coolhax RK)',
                'published_at' => Carbon::now()->subHours(6),
            ],
            [
                'title' => 'Zero-Downtime Restaurant Billing: Implementing Offline-First POS & Web ESC/POS Thermal Printing',
                'category' => 'Full-Stack Architecture',
                'image' => 'assets/img/projects/solidrix-dine.png',
                'summary' => 'Overcoming unstable restaurant Wi-Fi networks with IndexedDB offline-first synchronization and direct USB/Network thermal receipt printing.',
                'content' => $contentOfflinePOS,
                'author' => 'Rohit Kumar (Coolhax RK)',
                'published_at' => Carbon::now()->subDays(1),
            ],
            [
                'title' => 'Handling High-Throughput Webhook Bursts with Redis Streams and Laravel 11',
                'category' => 'Backend & DevOps',
                'image' => 'assets/img/projects/solidrix-whatsmeet.png',
                'summary' => 'Architectural strategies for processing sudden spikes of inbound webhooks from payment gateways and messaging providers without exhausting database connections.',
                'content' => $contentWebhooks,
                'author' => 'Rohit Kumar (Coolhax RK)',
                'published_at' => Carbon::now()->subDays(2),
            ],
        ];

        foreach ($blogs as $blogData) {
            Blog::updateOrCreate(
                ['title' => $blogData['title']],
                [
                    'slug' => Str::slug($blogData['title']),
                    'category' => $blogData['category'],
                    'image' => $blogData['image'],
                    'summary' => $blogData['summary'],
                    'content' => $blogData['content'],
                    'author' => $blogData['author'],
                    'is_published' => true,
                    'published_at' => $blogData['published_at'],
                ]
            );
        }
    }
}
