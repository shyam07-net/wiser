<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table= 'chats';
    protected $fillable =[
        'SenderId',
        'ReciverId',
        'GroupId',
        'message',
        'files',
        'forwarded',
        'pin',   // pin means pinned message or not
        'read_at',
        'edited_at', 
        'deleted_at',
        ]; 
    public function MessageHistory()
    {
        return $this->hasMany(chat_messages_history::class);
    }

    public function MediaFiles()
    {
        return $this->hasMany(ChatMedia::class);
    }
}
