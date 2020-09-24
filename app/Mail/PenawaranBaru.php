<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class PenawaranBaru extends Mailable
{
    public $quot, $itemId;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quot, $itemId)
    {
        $this->quot = $quot;
        $this->itemId = $itemId;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('order@putrakaryalogamsukses.com', 'New Quotation Request from user.')
            ->subject('[Quotation#' . $this->quot->id . '] Congratulations! You have new quotation request!')
            ->view('emails.sites.penawaranbaru');
    }
}
