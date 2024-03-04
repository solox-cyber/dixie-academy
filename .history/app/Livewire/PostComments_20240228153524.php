<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Computed;

class PostComments extends Component
{
    public Post $post;

    
    public string $comment;

    #[Computed()]
    public function comments(){
      return $this?->post?->comments()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}
