<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JourneyBlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => "The Ultimate Guide to WhatsApp Business API Integration in 2026",
                'category' => "WhatsApp Integration",
                'image' => "assets/img/blog/whatsapp_api_integration_1788954691145.png",
                'summary' => "A step-by-step technical guide to integrating the Meta Cloud API for bulk messaging, webhooks, and template approvals.",
                'content' => "The WhatsApp Business API (now Meta Cloud API) is the most powerful communication channel for SaaS products. Unlike traditional SMS, WhatsApp provides high delivery rates, rich media templates, and interactive buttons.\n\n### 1. Setting up Meta Developer Console\nTo begin, you need a verified Facebook Business Manager account. Create a new app with 'Business' permissions and add the WhatsApp product.\n\n### 2. Handling the Webhook Verification\nWhen you configure webhooks to receive incoming messages, Meta requires a robust verification endpoint:\n```php\npublic function verifyWebhook(Request \$request)\n{\n    \$hubMode = \$request->query('hub_mode');\n    \$hubChallenge = \$request->query('hub_challenge');\n    \$hubVerifyToken = \$request->query('hub_verify_token');\n\n    if (\$hubMode === 'subscribe' && \$hubVerifyToken === config('services.whatsapp.verify_token')) {\n        return response(\$hubChallenge, 200);\n    }\n    return response('Forbidden', 403);\n}\n```\n\n### 3. Dispatching Bulk Campaigns\nFor bulk broadcasting, never use synchronous API calls in loops. Always push messaging jobs to Laravel Queues backed by Redis to prevent server timeouts and respect Meta's rate limits.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 1,
            ],
            [
                'title' => "Decoding WhatsApp Cloud API Error Codes: Troubleshooting 131051",
                'category' => "API Debugging",
                'image' => "assets/img/blog/whatsapp_error_131051_1788954717417.png",
                'summary' => "How to handle unsupported message types, webhook timeouts, and the infamous 131051 error in production.",
                'content' => "Integrating WhatsApp Cloud API is smooth until you hit edge cases in production. One of the most common issues we faced building WhatsMeet was the 'Unsupported message type' error, often logged during webhook ingestion.\n\n### Understanding Error 131051\nThis error typically occurs when a user replies to your WhatsApp Business number with a message type your API hasn't been configured to parse—such as interactive list replies, location pins, or specific sticker formats.\n\n### Logging and Graceful Degradation\nInstead of letting your server throw a 500 error, always parse the payload safely:\n\n```php\nif (!isset(\$message['type']) || \$message['type'] === 'unsupported') {\n    \\Log::warning('Unsupported Payload Received', ['id' => \$message['id'] ?? 'unknown']);\n    return response()->json(['status' => 'acknowledged'], 202);\n}\n```\nReturning a 202 Accepted ensures Meta doesn't retry the webhook delivery exponentially.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 2,
            ],
            [
                'title' => "AWS SES vs SendGrid: Why We Scaled Solidrix Send with AWS",
                'category' => "Email Infrastructure",
                'image' => "assets/img/blog/aws_ses_solidrix_1788954733137.png",
                'summary' => "A deep architectural comparison of AWS SES and SendGrid for handling 1M+ emails per day.",
                'content' => "When building **Solidrix Send**, our bulk email marketing platform, we needed an SMTP backbone that was cost-effective, hyper-scalable, and offered granular IP reputation management.\n\n### The Cost Factor\nAWS SES is exponentially cheaper than SendGrid at high volumes. While SendGrid offers an excellent out-of-the-box UI, SES provides the raw API power we needed to build our own multi-tenant analytics dashboard.\n\n### Configuration Sets & IP Warmup\nSES allows defining **Configuration Sets** to route bounce and complaint metrics directly to SNS topics. This enabled us to build an automated suppression list manager:\n\n- If an email hard-bounces, the SNS webhook triggers a serverless Lambda or Laravel API route.\n- The email is immediately marked as 'Bounced' in our database.\n- Future campaigns automatically exclude this email to protect domain reputation.\n\nUltimately, SES gave us the architectural control necessary to build an enterprise-grade Email Service Provider (ESP).",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 3,
            ],
            [
                'title' => "How to Build a Custom CRM like WhatsMeet using Laravel",
                'category' => "SaaS Architecture",
                'image' => "assets/img/blog/laravel_crm_whatsmeet_1788954773233.png",
                'summary' => "Behind the scenes of engineering a WhatsApp-centric Customer Relationship Management (CRM) platform.",
                'content' => "Traditional CRMs focus on email and phone calls. **WhatsMeet** was born from the need to manage sales pipelines entirely via WhatsApp.\n\n### The Data Model\nBuilding a CRM requires a flexible data model. We used polymorphic relationships in Laravel to link contacts to different entities (Deals, Organizations, Support Tickets).\n\n### The Unified Inbox\nTo sync real-time WhatsApp messages to the CRM interface, we utilized **Laravel Reverb (WebSockets)**:\n1. Webhook receives message from Meta.\n2. Job saves message to MySQL.\n3. Event is broadcasted to the frontend.\n4. Vue.js/Inertia frontend updates the chat UI instantly.\n\n### Security & Multi-Tenancy\nEvery API endpoint in WhatsMeet is protected by Sanctum tokens and scoped strictly to the authenticated Tenant's workspace. Missing global scopes is the #1 cause of data leaks in SaaS CRMs.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 4,
            ],
            [
                'title' => "Handling WhatsApp API Rate Limits Like a Pro",
                'category' => "API Debugging",
                'image' => "assets/img/blog/whatsapp_rate_limits_1788954789301.png",
                'summary' => "Techniques to prevent HTTP 429 Too Many Requests when broadcasting to massive contact lists.",
                'content' => "Meta imposes strict rate limits on the WhatsApp Cloud API. If you try to loop through 10,000 contacts and fire Guzzle HTTP requests synchronously, your account will be throttled and potentially flagged.\n\n### The Queue-Driven Approach\nInstead of sending messages immediately, dispatch them to a queue with a dynamic delay:\n\n```php\nforeach (\$contacts as \$index => \$contact) {\n    // Stagger jobs by 1 second each to respect rate limits\n    SendWhatsAppMessageJob::dispatch(\$contact, \$template)\n        ->delay(now()->addSeconds(\$index));\n}\n```\n\n### Exponential Backoff\nAlways configure your queue workers with exponential backoff. If a job fails due to a temporary API outage or limit, Laravel will wait longer before retrying.\n\n```php\npublic \$backoff = [10, 30, 60, 120]; // Wait 10s, then 30s, etc.\n```\nThis ensures your application gracefully handles traffic spikes.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 5,
            ],
            [
                'title' => "Scaling Email Marketing Infrastructure with Laravel and AWS SES",
                'category' => "Infrastructure",
                'image' => "assets/img/blog/laravel_aws_ses_1788954824955.png",
                'summary' => "How to properly configure Laravel Mailables with Amazon SES for high-throughput dispatch.",
                'content' => "Laravel's Mail component is powerful, but out of the box, it's not optimized for sending millions of emails. When building platforms like Solidrix Send, you need to bypass standard mail drivers.\n\n### Utilizing the SES API Directly\nInstead of standard SMTP (which has higher latency due to connection handshakes), use the AWS SES HTTP API driver.\n\nConfigure your `.env`:\n```env\nMAIL_MAILER=ses\nAWS_ACCESS_KEY_ID=your_key\nAWS_SECRET_ACCESS_KEY=your_secret\nAWS_DEFAULT_REGION=us-east-1\n```\n\n### Chunking & Queues\nWhen dealing with bulk lists, always use Eloquent chunking to prevent memory exhaustion:\n\n```php\nSubscriber::where('active', true)->chunk(1000, function (\$subscribers) {\n    foreach (\$subscribers as \$sub) {\n        Mail::to(\$sub)->queue(new MarketingCampaign(\$sub));\n    }\n});\n```\nRun multiple queue workers using Supervisor to dispatch emails concurrently.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 6,
            ],
            [
                'title' => "Building a High-Performance SaaS Architecture from Scratch",
                'category' => "SaaS Architecture",
                'image' => "assets/img/blog/saas_architecture_1788954839818.png",
                'summary' => "The blueprint I use to launch scalable SaaS products quickly without accumulating technical debt.",
                'content' => "Building a SaaS isn't just about writing code; it's about making architectural decisions that won't haunt you 12 months later.\n\n### My Go-To Stack in 2026\n- **Backend:** Laravel (PHP 8.3) for rapid business logic development.\n- **Frontend:** Vue.js + Inertia.js (No separate API needed, monolithic joy).\n- **Database:** MySQL 8 with strict JSON column usage for unstructured tenant settings.\n- **Caching:** Redis for queues, sessions, and heavy query caching.\n- **Deployment:** GitHub Actions deploying to containerized VPS environments.\n\n### The Importance of Repositories & Services\nNever write business logic in Controllers. Always use Service classes. This makes it trivial to trigger the same logic from a web route, an API route, or an Artisan console command.\n\nStart simple, but structure for scale.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 7,
            ],
            [
                'title' => "Automating WhatsApp Messaging for Support and Sales Teams",
                'category' => "WhatsApp Integration",
                'image' => "assets/img/blog/whatsapp_sales_automation_1788954860775.png",
                'summary' => "How automated lead nurturing via WhatsApp increases conversion rates by 400% compared to email.",
                'content' => "Email open rates hover around 20%. WhatsApp open rates exceed 90%. If your sales team isn't automating their WhatsApp outreach, they are leaving money on the table.\n\n### The Drip Campaign Model\nIn platforms like WhatsMeet, we built automated sequences:\n1. **Day 1:** Welcome message + Interactive 'Reply' button.\n2. **Day 3:** Case study PDF attachment.\n3. **Day 7:** Call-to-action link to book a meeting.\n\n### Interactive Messages\nInstead of plain text, use WhatsApp's interactive buttons. It forces a micro-commitment from the user. When a user clicks 'Yes, I am interested', a webhook fires, instantly updating the lead's status in the CRM and assigning them to a live sales agent.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 8,
            ],
            [
                'title' => "Why Your Emails Land in Spam and How to Fix It",
                'category' => "Email Infrastructure",
                'image' => "assets/img/blog/email_spam_filter_1788954878236.png",
                'summary' => "A masterclass on DKIM, SPF, DMARC, and IP reputation management for AWS SES users.",
                'content' => "There is nothing worse than building a beautiful marketing campaign only for it to land in the Gmail Spam folder. Deliverability is an engineering problem.\n\n### The Holy Trinity: SPF, DKIM, DMARC\n- **SPF (Sender Policy Framework):** A DNS record proving your server is allowed to send emails for your domain.\n- **DKIM (DomainKeys Identified Mail):** A cryptographic signature attached to every email, proving it wasn't tampered with.\n- **DMARC:** Tells receiving servers what to do if SPF or DKIM fails (Reject, Quarantine, or None).\n\n### Warming Up Dedicated IPs\nIf you buy a dedicated IP on AWS SES and immediately blast 50,000 emails, you will be blacklisted. You must slowly 'warm up' the IP by sending 50 emails on Day 1, 100 on Day 2, following an exponential curve.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 9,
            ],
            [
                'title' => "Solidrix Send: Revolutionizing Bulk Email Delivery",
                'category' => "Enterprise SaaS",
                'image' => "assets/img/blog/solidrix_send_platform_1788954891604.png",
                'summary' => "The origin story of Solidrix Send and how we built a competitor to Mailchimp with Laravel.",
                'content' => "Many email marketing platforms are overly complex and prohibitively expensive for startups. We built **Solidrix Send** to solve our own problems.\n\n### Core Features We Built\n- **Drag & Drop Builder:** Creating a robust email builder required integrating GrapesJS into our Vue frontend.\n- **Advanced Segmentation:** Querying millions of subscribers based on custom tags required heavy database index tuning.\n- **Real-Time Analytics:** Tracking opens and clicks is done by injecting a transparent 1x1 tracking pixel into every email. When the pixel is requested, our edge servers log the IP, user agent, and timestamp, pushing the data into Redis for real-time dashboard updates.\n\nBuilding an ESP is hard, but controlling your own delivery infrastructure is a massive competitive advantage.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 10,
            ],
            [
                'title' => "Laravel Queues & Background Jobs: Processing Millions of Messages",
                'category' => "Performance",
                'image' => "assets/img/blog/whatsapp_api_integration_1788954691145.png",
                'summary' => "Deep dive into Redis, Laravel Horizon, and optimizing worker processes for high-volume tasks.",
                'content' => "If your application responds slowly to users, you are likely doing synchronous work that should be deferred. Sending emails, calling third-party APIs, and generating PDFs must happen in the background.\n\n### Configuring Horizon\nLaravel Horizon provides a beautiful dashboard to monitor Redis queues. To maximize throughput, configure your `horizon.php` to scale workers dynamically:\n\n```php\n'production' => [\n    'supervisor-1' => [\n        'connection' => 'redis',\n        'queue' => ['default', 'emails', 'webhooks'],\n        'balance' => 'auto',\n        'minProcesses' => 1,\n        'maxProcesses' => 20,\n        'memory' => 128,\n        'tries' => 3,\n    ],\n],\n```\nHorizon will automatically spin up more processes when the queue gets backed up, and scale down to save CPU when idle.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 11,
            ],
            [
                'title' => "Step-by-Step Guide to Verifying Your Domain for AWS SES",
                'category' => "Infrastructure",
                'image' => "assets/img/blog/aws_ses_solidrix_1788954733137.png",
                'summary' => "How to exit the AWS SES sandbox and configure your DNS for production email sending.",
                'content' => "AWS SES puts all new accounts in a 'Sandbox' mode where you can only send emails to verified addresses. \n\n### The Verification Process\n1. Add your Domain in the SES Console.\n2. AWS will provide CNAME records for DKIM. Add these to your DNS provider (Cloudflare, Route53, GoDaddy).\n3. Add the custom MAIL FROM domain (e.g., bounce.yourdomain.com) to separate marketing bounces from your main domain.\n\n### Requesting Production Access\nYou must open a support ticket with AWS to exit the sandbox. Be extremely detailed about:\n- How you acquire subscribers (Double Opt-In is preferred).\n- How you handle bounces and complaints.\n- What type of content you are sending.\n\nA well-written request gets approved in 24 hours.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 12,
            ],
            [
                'title' => "How We Reduced Email Bounce Rates Using Automated Bounce Processing",
                'category' => "Email Infrastructure",
                'image' => "assets/img/blog/email_spam_filter_1788954878236.png",
                'summary' => "Protecting your sender reputation by automatically disabling invalid email addresses.",
                'content' => "If your bounce rate exceeds 5%, AWS SES will pause your account. You cannot manually monitor bounces at scale; it must be automated.\n\n### The Architecture\n1. Configure AWS SES to publish Bounce and Complaint events to an SNS Topic.\n2. Create an HTTP/HTTPS subscription on that SNS Topic pointing to your Laravel App webhook (e.g., `POST /api/webhooks/sns`).\n3. Write a controller to parse the payload:\n\n```php\n\$message = json_decode(request('Message'), true);\nif (\$message['notificationType'] === 'Bounce') {\n    foreach (\$message['bounce']['bouncedRecipients'] as \$recipient) {\n        Subscriber::where('email', \$recipient['emailAddress'])->update(['status' => 'bounced']);\n    }\n}\n```\nThis loop ensures that bad emails are instantly purged from future campaigns.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 13,
            ],
            [
                'title' => "Building Interactive WhatsApp Chatbots with Meta Cloud API",
                'category' => "WhatsApp Integration",
                'image' => "assets/img/blog/whatsapp_sales_automation_1788954860775.png",
                'summary' => "Going beyond plain text by utilizing Lists, Reply Buttons, and Product Messages in WhatsApp.",
                'content' => "The Meta Cloud API supports highly interactive message types that drastically improve UX. A chatbot shouldn't force users to type '1 for Sales, 2 for Support'.\n\n### Sending a Reply Button Message\nThe JSON payload for an interactive button looks like this:\n\n```json\n{\n  \"messaging_product\": \"whatsapp\",\n  \"to\": \"PHONE_NUMBER\",\n  \"type\": \"interactive\",\n  \"interactive\": {\n    \"type\": \"button\",\n    \"body\": { \"text\": \"Did you find this helpful?\" },\n    \"action\": {\n      \"buttons\": [\n        { \"type\": \"reply\", \"reply\": { \"id\": \"btn_yes\", \"title\": \"Yes\" } },\n        { \"type\": \"reply\", \"reply\": { \"id\": \"btn_no\", \"title\": \"No\" } }\n      ]\n    }\n  }\n}\n```\nWhen the user taps 'Yes', your webhook receives the exact payload `btn_yes`, making routing in your backend incredibly clean.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 14,
            ],
            [
                'title' => "Optimizing Database Queries for High-Traffic Marketing Platforms",
                'category' => "Database Tuning",
                'image' => "assets/img/blog/saas_architecture_1788954839818.png",
                'summary' => "How to use Eloquent effectively without triggering N+1 issues and server crashes.",
                'content' => "In platforms like Solidrix Send and WhatsMeet, reading from the database is the biggest bottleneck. \n\n### The N+1 Problem\nThe most common mistake in Laravel is looping through relationships without eager loading:\n\n```php\n// BAD: Triggers 101 queries for 100 subscribers\n\$subscribers = Subscriber::all();\nforeach (\$subscribers as \$sub) {\n    echo \$sub->campaign->name;\n}\n\n// GOOD: Triggers only 2 queries\n\$subscribers = Subscriber::with('campaign')->get();\n```\n\n### Indexing\nAlways add indexes to columns that are frequently used in `WHERE` clauses. If you filter by `tenant_id` and `status` constantly, create a composite index in your migration:\n`\$table->index(['tenant_id', 'status']);`",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 15,
            ],
            [
                'title' => "My Journey: From a Simple Script to Building Solidrix Technologies",
                'category' => "Entrepreneurship",
                'image' => "assets/img/blog/laravel_crm_whatsmeet_1788954773233.png",
                'summary' => "The story of scaling side projects into full-fledged Enterprise SaaS products.",
                'content' => "Building software is a journey. What started as simple PHP scripts for automating personal tasks eventually evolved into complex architectural systems like SKLOPS, Vedant Billing, and WhatsMeet.\n\n### Learning by Doing\nI didn't start by architecting multi-tenant databases. I started by failing. Codebases became unmanageable, servers crashed due to unoptimized queries, and APIs hit rate limits. Every failure was a masterclass in software engineering.\n\n### The Solidrix Vision\nToday, Solidrix Technologies focuses on building high-performance, robust solutions for businesses. Whether it's managing school infrastructure or scaling global marketing campaigns, the core philosophy remains the same: write clean, maintainable, and highly optimized code.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 16,
            ],
            [
                'title' => "How to Set Up WhatsApp Cloud API Webhooks for Real-Time Messaging",
                'category' => "WhatsApp Integration",
                'image' => "assets/img/blog/whatsapp_rate_limits_1788954789301.png",
                'summary' => "Ensuring zero data loss when Meta sends thousands of concurrent webhook payloads.",
                'content' => "When you run a successful WhatsApp campaign, replies flood in. Your webhook endpoint will receive heavy concurrent traffic.\n\n### Ingestion Architecture\nYour webhook controller should do absolutely ZERO processing. Its only job is to validate the payload, save it to a queue, and return 200 OK.\n\n```php\npublic function handle(Request \$request)\n{\n    // Push payload to Redis instantly\n    ProcessIncomingWhatsAppMessage::dispatch(\$request->all());\n    return response('OK', 200);\n}\n```\nIf your controller queries the database or calls external APIs, Meta will timeout after a few seconds and retry, causing a massive backlog and duplicated data.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 17,
            ],
            [
                'title' => "Securing REST APIs in Laravel: Best Practices for SaaS Platforms",
                'category' => "Security",
                'image' => "assets/img/blog/laravel_aws_ses_1788954824955.png",
                'summary' => "Implementing Laravel Sanctum, Rate Limiting, and CORS properly for production APIs.",
                'content' => "APIs are the backbone of modern SaaS, but they are also the primary attack vector. \n\n### API Authentication with Sanctum\nLaravel Sanctum provides a lightweight authentication system for SPAs and simple APIs. For API tokens, always use hashed tokens in the database, which Sanctum handles automatically.\n\n### Rate Limiting\nAlways protect public endpoints (like login or webhook ingestion) with rate limits in `RouteServiceProvider`:\n```php\nRateLimiter::for('api', function (Request \$request) {\n    return Limit::perMinute(60)->by(\$request->user()?->id ?: \$request->ip());\n});\n```\nThis prevents brute-force attacks and abuse of your server resources.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 18,
            ],
            [
                'title' => "Designing Event-Driven Microservices for High-Concurrency Messaging",
                'category' => "Microservices",
                'image' => "assets/img/blog/saas_architecture_1788954839818.png",
                'summary' => "Breaking down monoliths using RabbitMQ, Redis Pub/Sub, and Event Sourcing.",
                'content' => "As Solidrix Send grew, processing everything in a single Laravel monolith became difficult. We transitioned to an event-driven architecture.\n\n### The Publisher-Subscriber Model\nInstead of tight coupling, components emit events. When a user registers, the Auth service fires a `UserRegistered` event to a message broker (RabbitMQ/Redis).\n- The Email Service listens and sends a welcome email.\n- The Analytics Service listens and updates marketing stats.\n- The Billing Service listens and creates a Stripe customer.\n\nThis architecture ensures that if the Email Service crashes, the registration flow doesn't break. The event simply waits in the queue until the service is restored.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 19,
            ],
            [
                'title' => "The Future of Customer Engagement: Omni-Channel Strategies in 2026",
                'category' => "Marketing Strategy",
                'image' => "assets/img/blog/solidrix_send_platform_1788954891604.png",
                'summary' => "Why combining WhatsApp, Email, and SMS is the only way to build resilient marketing flows.",
                'content' => "Relying on a single communication channel is dangerous. Algorithms change, spam filters tighten, and platforms get blocked.\n\n### The Omni-Channel Workflow\nThe future of CRM (like what we aim for with WhatsMeet and Solidrix Send) is automated fallbacks:\n1. Send an important invoice via WhatsApp.\n2. If WhatsApp fails (number not registered), automatically fallback to SMS.\n3. Send the detailed PDF receipt via Email.\n\nBy building an abstraction layer over these APIs, businesses can ensure critical notifications always reach their customers, maximizing engagement and trust.",
                'author' => "Rohit Kumar (Coolhax RK)",
                'sub_days' => 20,
            ],
        ];

        foreach ($blogs as $b) {
            Blog::create([
                'title' => $b['title'],
                'slug' => Str::slug($b['title']),
                'category' => $b['category'],
                'image' => $b['image'],
                'summary' => $b['summary'],
                'content' => $b['content'],
                'author' => $b['author'],
                'is_published' => true,
                'published_at' => Carbon::now()->subDays($b['sub_days']),
            ]);
        }
    }
}
