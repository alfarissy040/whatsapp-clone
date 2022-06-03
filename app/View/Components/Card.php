<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $img;
    public $title;
    public $excerpt;
    public $time;
    public $unread;
    public $mute;
    public $status;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $title, $excerpt, $time, $unread, $mute, $status, $type)
    {
        $this->img = $img;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->time = $time;
        $this->unread = $unread;
        $this->status = $mute;
        $this->status = $status;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
