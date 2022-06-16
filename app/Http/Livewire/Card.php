<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $model = [
        'img' => '',
        'title' => '',
        'excerpt' => '',
        'time' => '',
        'unread' => '',
        'mute' => '',
        'status' => '',
        'type' => '',
    ];

    public function mount($img, $title, $excerpt, $time, $unread, $mute, $status, $type)
    {
        $this->model['img'] = $img;
        $this->model['title'] = $title;
        $this->model['excerpt'] = $excerpt;
        $this->model['time'] = $time;
        $this->model['unread'] = $unread;
        $this->model['mute'] = $mute;
        $this->model['status'] = $status;
        $this->model['type'] = $type;
    }

    public function render()
    {
        return view('livewire.card');
    }

    public function readMsg()
    {
        $this->model['status'] = true;
    }
}
