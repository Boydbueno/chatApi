<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'category'];

    public function chats() {
        return $this->hasMany('App\Chat');
    }
}