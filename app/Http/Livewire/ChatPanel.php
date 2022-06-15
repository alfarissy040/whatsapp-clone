<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatPanel extends Component
{
    public $title = '';

    public function render()
    {
        return view('livewire.chat-panel');
    }
}
