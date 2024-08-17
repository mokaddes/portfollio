<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Notifications\ContactMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{
    public function index()
    {
        $ip = request()->ip();
        if ($ip !== '103.176.2.79') {
            $data = [
                'name' => 'Guest User',
                'email' => 'N/A',
                'message' => 'this user visited the site',
                'ip_address' => $ip
            ];
            $mail = 'info@mokaddes.com';
            Notification::route('mail', $mail)->notify(new ContactMailNotification($data));
        }
        return view('portfolio.index');

    }
}
