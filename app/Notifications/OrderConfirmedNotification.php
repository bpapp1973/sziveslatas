<?php

namespace App\Notifications;

use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderConfirmedNotification extends Notification
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
                    ->subject('Értesítés megrendelés visszaigazolásáról - '.$this->orders->ad->title)
                    ->greeting('Szia!')
                    ->line('Ezt az emailt azért küldtük neked, mert a hirdető visszaigazolta rendszerünkben az alábbi foglalási szándékodat:')
                    ->action('Foglalás megtekintése', url('orders/'.$this->orders->id))
                    ->line('A hirdető hamarosan felveszi veled a kapcsolatot.')
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
