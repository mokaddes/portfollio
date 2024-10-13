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
                $visitData = json_decode(file_get_contents("https://ipinfo.io/{$ip}/json"));
                $visitor = VisitorLog::where('ip_address', $ip)->first();
                if (!$visitor) {
                    $visitor = new VisitorLog();
                }
                $visitor->ip_address = $ip;
                $visitor->city = $visitData->city;
                $visitor->region = $visitData->region;
                $visitor->country = $visitData->country;
                $visitor->location = $visitData->loc;
                $visitor->organization = $visitData->org;
                $visitor->timezone = $visitData->timezone;
                $visitor->visit_count = $visitor->visit_count + 1;
                $visitor->save();
            }
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
        }
        return view('portfolio.index');

    }
}
