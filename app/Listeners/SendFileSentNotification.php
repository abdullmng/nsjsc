<?php

namespace App\Listeners;

use App\Events\FileSent;
use App\Notifications\FileReceivedNotification;
use App\Notifications\FileSentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendFileSentNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FileSent $event): void
    {
        $transfer = $event->transfer;
        $sender = $event->transfer->sender;
        $recipient = $event->transfer->receiver;
        $sender->notify(new FileSentNotification($transfer));
        $recipient->notify(new FileReceivedNotification($transfer));
    }
}
