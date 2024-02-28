<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class LikeButton extends Component
{
    public Post $post;

public function toggleLike(){
   if(auth()->guest()){
    return $this->redirect(route('login'), true);
   }

   $user = auth()->user();
   $hasLiked = $user->likes()0>
}

    public function render()
    {
        return view('livewire.like-button');
    }
}
