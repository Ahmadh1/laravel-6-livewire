<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component{   
    
    public $count;

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */

    public function mount() {
        $this->count = auth()->user()->count;
    }
    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function increment() {
        $this->count++;
        auth()->user()->count = $this->count;
        auth()->user()->save();
    }

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */

    public function decrement() {
        $this->count--;
        auth()->user()->count = $this->count;
        auth()->user()->save();
    }

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function render(){
        return view('livewire.counter');
    }
}
