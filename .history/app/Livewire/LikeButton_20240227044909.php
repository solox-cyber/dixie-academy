<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class LikeButton extends Component
{
    public Post $post;

public function toggleLike(){
   if(auth()->guest()){
    
   }
}

    public function render()
    {
        return view('livewire.like-button');
    }
}
