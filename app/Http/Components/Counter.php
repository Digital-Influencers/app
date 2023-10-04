<?php

namespace App\Http\Components;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $title = "sss";

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('components.counter')
            ->layout('layouts.layoutMaster');
    }
}
