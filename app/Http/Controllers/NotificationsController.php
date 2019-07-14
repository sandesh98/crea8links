<?php

namespace App\Http\Controllers;

use App\Mail\FormMessage;
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
            'message' => 'required',
            'company' => 'nullable',
            'sort' => 'required'
        ]);

        $notification = Notification::create($request->all());

        Mail::to('sandeshb981@gmail.com')->send(new FormMessage($notification));

        return response()->json('Bericht verzonden!', 200);
    }
}
