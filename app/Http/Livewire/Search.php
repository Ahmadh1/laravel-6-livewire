<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class Search extends Component
{
    public $query;
    public $contacts;

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function updatedQuery() {
        $this->contacts = Contact::where('name', 'like', '%'. $this->query . '%')
                            ->get()
                                ->toArray();
    }
    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */
    public function render() {
        return view('livewire.search');
    }
}
