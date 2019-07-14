<?php

namespace App\Mail;

use App\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $notification;

    /**
     * Create a new message instance.
     *
     * @param $notification
     */
    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.formMessage');
    }
}
