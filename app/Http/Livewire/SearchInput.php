<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchInput extends Component
{
    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function render()
    {   
        $users = [];

        if (strlen($this->search) > 0) {
            if (User::where('name', 'like','%'.$this->search.'%')->exists()) {
                $users = User::where('name', 'like','%'.$this->search.'%')->get();
            } else {
                $users = [];
            }
        }
        return view('livewire.search-input',
            ['users' => $users]
        ); 
    }
}
