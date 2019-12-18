<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $fillable = [
        'from_user', 'to_user', 'msg_contente'
    ];
}
