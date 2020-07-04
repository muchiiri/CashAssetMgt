<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyUserNotification extends Notification
{
    use Queueable;

    private $user = null;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Verify Your User')
            ->action('Click Here To Verify', route('userVerification', $this->user->verification_token))
            ->line('Thank you for choosing us');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}