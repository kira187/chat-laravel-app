<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['userr_sent', 'user_recive'];

    //Relationship 1:m inverse
    public function userSent()
    {
        return $this->belongsTo(User::class);
    }

    //Relationship 1:m inverse
    public function userRecive()
    {
        return $this->belongsTo(User::class);
    }

    //Relationship 1:m
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}