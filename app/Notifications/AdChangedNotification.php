<?php

namespace App\Notifications;

use App\Models\Ads;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdChangedNotification extends Notification
{
    use Queueable;

    public $ads_id;
    public $ads;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($ads_id)
    {
        $this->ads_id = $ads_id;
        $this->ads = Ads::find($ads_id);
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
                    ->subject('Értesítés hirdetés megváltozásáról - '.$this->ads->title)
                    ->greeting('Szia!')
                    ->line('Ezt az email azért küldtük neked, mert egy hirdetés, aminél jelezted hogy érdekel, megváltozott:')
                    ->action('Hirdetés megtekintése', url('ads/'.$this->ads_id));
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
