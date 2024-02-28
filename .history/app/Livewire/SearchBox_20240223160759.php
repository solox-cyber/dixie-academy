<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $search = '';

    public function updatedSearch(){

    }
    public function render()
    {
        return view('livewire.search-box');
    }
}
