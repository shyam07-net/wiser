<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendTaskNotifications implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $recieverId;
    public $senderId;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($SenderId,$RecieverId)
    {
      $this->recieverId = $RecieverId;
      $this->senderId = $SenderId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
      public function broadcastOn()
    {
        return ['task-channel'];
    }
    public function broadcastAs()
    {
       return 'Send-task-live-notifications';  
    }
}
