<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;
    
    public function render()
    {
        return view('livewire.like-button');
    }
}
