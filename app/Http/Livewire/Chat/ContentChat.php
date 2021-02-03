<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ContentChat extends Component
{
    Public $ChatId;

    public function mount($id)
    {
        $this->ChatId = $id;
    }

    public function render()
    {
        return view('livewire.chat.content-chat');
    }
}
