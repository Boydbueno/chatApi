<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public $timestamps = false;
    protected $fillable = ['author', 'text'];

    public function chatroom()
    {
        return $this->belongsTo('App\Chatroom');
    }
}