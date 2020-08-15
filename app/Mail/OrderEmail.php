<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $s_name, $s_phone, $s_email, $r_name, $r_telephone, $r_message, $r_occassion, $address, $city, $state, $postal_code, $product_name, $quantity, $total_amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        //
        $this->s_name = $order->s_name;
        $this->s_phone = $order->s_phone;
        $this->s_email = $order->s_email;
        $this->r_name = $order->r_name;
        $this->r_telephone = $order->r_telephone;
        $this->r_message = $order->r_message;
        $this->r_occassion = $order->r_occassion;
        $this->address = $order->address;
        $this->city = $order->city;
        $this->state = $order->state;
        $this->postal_code = $order->postal_code;
        $this->product_name = $order->product_name;
        $this->quantity = $order->quantity;
        $this->total_amount = $order->total_amount;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Notification Cronulla Florists')->view('theme/layout/emails.order_email');
    }
}
