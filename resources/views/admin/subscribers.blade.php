@extends('layouts.app')

@section('title', 'Newsletter Subscribers - Admin')

@section('content')
<section class="th-admin-subscribers pt-120 pb-120">
    <div class="container">
        <!-- Dashboard Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3 p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3);">
            <div>
                <span class="badge bg-warning text-dark px-3 py-1 fs-6 rounded-pill mb-2 fw-bold">NEWSLETTER MANAGEMENT</span>
                <h1 class="text-white fw-bold fs-2 mb-0"><i class="fa-solid fa-users me-2 text-warning"></i> Subscribers List</h1>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.subscribers.export') }}" class="btn btn-outline-success rounded-pill px-4 fw-bold"><i class="fa-solid fa-download me-1"></i> Export to CSV</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-bold"><i class="fa-solid fa-arrow-left me-1"></i> Back to Dashboard</a>
            </div>
        </div>

        <!-- Subscribers Table -->
        <div class="bg-dark p-4 rounded-4 border border-secondary text-white mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold mb-0 text-warning fs-4">All Subscribers ({{ $subscribers->total() }})</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-warning">
                            <th># ID</th>
                            <th>Email Address</th>
                            <th>Status</th>
                            <th>IP Address</th>
                            <th>Subscribed On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subscribers as $sub)
                        <tr>
                            <td class="text-secondary">#{{ $sub->id }}</td>
                            <td class="fw-bold"><a href="mailto:{{ $sub->email }}" class="text-white text-decoration-none">{{ $sub->email }}</a></td>
                            <td>
                                @if($sub->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Unsubscribed</span>
                                @endif
                            </td>
                            <td class="text-secondary small">{{ $sub->ip_address ?? 'N/A' }}</td>
                            <td>{{ $sub->created_at->format('M d, Y h:i A') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-secondary">
                                <i class="fa-regular fa-envelope-open fs-1 mb-3 d-block text-muted"></i>
                                No subscribers found yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 d-flex justify-content-center">
                {{ $subscribers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
@endsection
