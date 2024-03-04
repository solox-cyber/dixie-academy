<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Computed;

class PostComments extends Component
{
    public Post $post;
    #[Rule('required|min:3|ma')]
    public string $comment;

    public function postComment(){

    }


    #[Computed()]
    public function comments(){
      return $this?->post?->comments()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}
