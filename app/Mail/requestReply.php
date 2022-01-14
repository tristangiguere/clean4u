<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class requestReply extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $reply = $this->data['reply'];

        return $this->subject('New message from the Clean4U team')
                    ->from("hello@clean4u.com", "Clean4U Team")
                    ->view('mail.requestreply');
    }
}