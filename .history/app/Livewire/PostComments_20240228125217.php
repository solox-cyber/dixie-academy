<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComments extends Component
{
    public Post $post;

    #[Computed()]
    public function comments(){
      return $this?->post?->comments()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}
