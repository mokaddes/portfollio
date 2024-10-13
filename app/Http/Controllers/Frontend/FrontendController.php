<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\VisitorLog;
use App\Notifications\ContactMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{
    public function index()
    {
        $ip = request()->ip();
        try {
            if ($ip !== '103.176.2.79' && $ip !== '127.0.0.1') {
                $response = Http::get("https://ipinfo.io/{$ip}/json");

                if ($response->successful()) {
                    $visitData = $response->json();
                    $visitor = VisitorLog::where('ip_address', $ip)->first();
                    if (!$visitor) {
                        $visitor = new VisitorLog();
                    }

                    $visitor->ip_address = $ip;
                    $visitor->city = $visitData['city'] ?? null;
                    $visitor->region = $visitData['region'] ?? null;
                    $visitor->country = $visitData['country'] ?? null;
                    $visitor->location = $visitData['loc'] ?? null;
                    $visitor->organization = $visitData['org'] ?? null;
                    $visitor->timezone = $visitData['timezone'] ?? null;
                    $visitor->visit_count = $visitor->visit_count + 1;
                    $visitor->save();
                } else {
                    Log::alert("Failed to retrieve IP data from ipinfo.io");
                }
            }
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
        }
        return view('portfolio.index');

    }
}
