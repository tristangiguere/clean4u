<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
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
        $name = $this->data['name'];
        $email = $this->data['email'];

        return $this->subject('New message from contact form')
                    ->from($email, $name)
                    ->view('mail.mytestemail');
    }
}