<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User

class LikeButton extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.like-button');
    }
}
