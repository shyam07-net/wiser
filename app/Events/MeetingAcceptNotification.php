<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MeetingAcceptNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $ReciverId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($ReciverId)
    {
        $this->ReciverId = $ReciverId;
    }

    public function broadcastOn()
    {
        return ['meeting-accept-channel'];
    }
    public function broadcastAs()
    {
       return 'Send-meeting-accept-live-notifications';  
    }
}
