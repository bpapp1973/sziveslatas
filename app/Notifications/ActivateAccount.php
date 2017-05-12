<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ActivateAccount extends Notification
{
    use Queueable;

     /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

   /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
                    ->subject('Felhasználói fiók aktiválása')
                    ->greeting('Szia!')
                    ->line('Kérlek aktiváld a felhasználó fiókod az alábbi linkre kattintva:')
                    ->action('Fiók aktiválása', url('user/activation', $this->token))
                    ->line('Ha nem te regisztráltál a '.env('APP_NAME','sziveslatas.hu').'-n akkor hagyd figyelmen kívül ezt a levelet.');
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
