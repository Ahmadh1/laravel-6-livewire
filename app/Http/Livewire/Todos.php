<?php

namespace App\Http\Livewire;

use App\Todo;
use Livewire\Component;

class Todos extends Component
{

    public $title = '';

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function addTodo() {
        $this->validate([
            'title' => 'required'
        ]);
        Todo::create([
            'user_id'   => auth()->id(),
            'title' =>  $this->title
        ]);
        $this->title = '';
    }
    
    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function toggleTodo($id) {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */

    public function updateTodo($id, $title) {
        $todo = Todo::find($id);
        $todo->title = $title;
        $todo->save();
    }

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */

    public function deleteTodo($id) {
        Todo::find($id)->delete();
    }
    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function render() {
        return view('livewire.todos', [
            'todos' => auth()->user()->todos
        ]);
    }
}
