<?php

namespace App\Livewire;

use Auth;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $title='Mon premier titre';
 
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
        return view('livewire.counter')->with(['userName' => Auth::user()->name?? 'noting user connect for moment', 'title' => $this->title]);
    }
}
