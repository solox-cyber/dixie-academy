<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComments extends Component
{
    public function render()
    {
        return view('livewire.post-comments');
    }
}
