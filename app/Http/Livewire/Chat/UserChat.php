<?php

namespace App\Http\Livewire\Chat;

use App\Models\Chat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserChat extends Component
{
    public $chat;
    public $userCurrent;

    public function mount()
    {
        $this->chat = new Chat();
        $this->userCurrent = Auth::user()->id;
    }
    public function render()
    {
        $chats = $this->chat->with(['userSent:id,name,profile_photo_path', 'userRecive:id,name,profile_photo_path', 'messages' => function($query){
            $query->latest();
        }])->where('user_sent', $this->userCurrent)
        ->orWhere('user_recive', $this->userCurrent)
        ->get();
        
        return view('livewire.chat.user-chat', compact('chats'));
    }
}
