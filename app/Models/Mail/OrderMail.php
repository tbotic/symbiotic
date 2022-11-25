<?php

namespace App\Models\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data=[];

    public function __construct($orderData)
    {
        // 
        $this->data=$orderData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => env('MAIL_USERNAME'), 'name' => env('MAIL_FROM_NAME')])->view('mails.order')->subject('Upit iz webshopa | symbiotic.hr')->with($this->data);
    }
}