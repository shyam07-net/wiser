<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_messages_history extends Model
{
    use HasFactory;
     protected $table= 'chat_messages_history';
     protected $fillable =[
     'Chat_id',
     'message',
    ];
}
