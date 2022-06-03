<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $data_search;
    public $search;
    // public $key = 0;

    public function render()
    {
        return view('livewire.search');
    }

    // public function cari()
    // {
    //     $this->data_search = $this->search;
    //     $this->key++;
    // }
}
