<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class Message extends Model
{
    use HasFactory;
    use SerializesModels;

 protected $fillable = ['content'];
   
    public function broadcastOn()
    {
        return new Channel('/chat_view');
    }
}
