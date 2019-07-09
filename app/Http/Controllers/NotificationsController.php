<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

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

        Notification::create($request->all());

        return response()->json(200);
    }
}
