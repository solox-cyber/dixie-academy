<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Con

class PostList extends Component
{
    #[Url()]
    public function render()
    {
        return view('livewire.post-list');
    }
}
