<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMessage extends Mailable
{
    public $email;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('new-message@putrakaryalogamsukses.com', 'New Message from user.')
            ->subject('[New Message#' . $this->email->id . '] Congratulations! You have new Message!')
            ->view('emails.sites.pesanbaru');
    }
}
