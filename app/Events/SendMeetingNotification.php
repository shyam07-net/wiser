<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMeetingNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $sender;
    public $reciever;
    public $Sender_id;
    public $main_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($sender,$reciever,$Sender_id ,$main_id)
    {
        $this->sender = $sender;
        $this->reciever = $reciever;
        $this->Sender_id = $Sender_id;
        $this->main_id = $main_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['meeting-channel'];
    }
    public function broadcastAs()
    {
       return 'Send-meeting-live-notifications';  
    }
}
