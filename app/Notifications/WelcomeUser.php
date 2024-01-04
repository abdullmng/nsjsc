<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeUser extends Notification
{
    use Queueable;

    public $password;
    /**
     * Create a new notification instance.
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line("Welcome {$notifiable->surname},")
                    ->line("Your account has been created with details below")
                    ->line("PF Number: {$notifiable->pf_number}")
                    ->line("Email address: {$notifiable->email}")
                    ->line("Phone Number: {$notifiable->phone_number}")
                    ->line("Temporary Password: {$this->password}")
                    ->line("You can sign in with your email or PF Number.")
                    ->line("To secure your account use the password reset feature to set a new password")
                    ->line("Use the button below to get started.")
                    ->action('Sign In', url(route('login')));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
