<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;

class PostList extends Component
{
    #[Url()]
    public function render()
    {
        return view('livewire.post-list');
    }
}
