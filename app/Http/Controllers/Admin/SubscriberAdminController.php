<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SubscriberAdminController extends Controller
{
    /**
     * Display a listing of subscribers.
     */
    public function index()
    {
        $subscribers = Subscriber::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.subscribers', compact('subscribers'));
    }

    /**
     * Export all subscribers to CSV.
     */
    public function export()
    {
        $subscribers = Subscriber::orderBy('created_at', 'desc')->get();
        
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=subscribers_" . date('Y-m-d') . ".csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID', 'Email', 'Status', 'IP Address', 'Subscribed At'];

        $callback = function() use($subscribers, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($subscribers as $sub) {
                $row['ID']  = $sub->id;
                $row['Email'] = $sub->email;
                $row['Status']  = $sub->status;
                $row['IP Address']  = $sub->ip_address;
                $row['Subscribed At']  = $sub->created_at->format('Y-m-d H:i:s');

                fputcsv($file, array($row['ID'], $row['Email'], $row['Status'], $row['IP Address'], $row['Subscribed At']));
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
}
