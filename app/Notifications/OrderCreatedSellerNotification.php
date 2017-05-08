<?php

namespace App\Notifications;

use App\Models\Ads;
use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderCreatedSellerNotification extends Notification
{
    use Queueable;
    public $orders;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($orders_id)
    {
        $this->orders = Orders::find($orders_id);
        //$this->ads_id = $this->orders->ads_id;
        //$this->ads = Ads::find($this->orders->ads_id);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Értesítés megrendelésről - '.$this->orders->ad->title)
                    ->greeting('Szia!')
                    ->line('Ezt az emailt azért küldtük neked, mert az egyik hirdetésedre megrendelés érkezett.')
                    ->line('Megrendelő: '.$this->orders->last_name.' '.$this->orders->first_name)
                    ->line('Email: '.$this->orders->email)
                    ->line('Telefon: '.$this->orders->phone)
                    ->line('Időpont: '.$this->orders->start_date.' '.$this->orders->end_date)
                    ->action('Hirdetés megtekintése', url('ads/'.$this->orders->ads_id))
                    ->line('Kérlek vedd fel a kapcsolatot a megrendelővel.')
                    ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
