<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FileSentNotification extends Notification
{
    use Queueable;

    public $transfer;
    /**
     * Create a new notification instance.
     */
    public function __construct($transfer)
    {
        $this->transfer = $transfer;
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
        $doc = str_replace('/storage/uploads/', '', $this->transfer->file->path);
        $path = storage_path('app/public/uploads/'. $doc);
        return (new MailMessage)
                    ->greeting("Hello {$notifiable->full_name}.")
                    ->line("You sent a document to:")
                    ->line("Office: {$this->transfer->receiving_office->name}")
                    ->line("Recipient: {$this->transfer->receiver->full_name}")
                    ->line("Rank: {$this->transfer->receiver->rank}")
                    ->line("Document Details:")
                    ->line("File Number: {$this->transfer->file->number}")
                    ->line("File Name: {$this->transfer->file->name}")
                    ->attach($path);
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
