<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ConfirmUserOrder extends Mailable
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
        return $this->from('order@putrakaryalogamsukses.com', 'Your Order Request Quotation.')
            ->subject('Your Request Quotation Successfully we received!')
            ->view('emails.sites.konfirmasiorder');
    }
}
