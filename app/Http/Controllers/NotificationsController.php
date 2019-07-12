<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentReceived;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'present',
            'purpose' => 'required',
            'message' => 'required'
        ]);

        $notifaction = Notification::create($request->all());

        Mail::to('sandeshb981@gmail.com')->send(new AppointmentReceived($notifaction));

        return response()->json('Bericht verzonden!', 200);
    }
}
