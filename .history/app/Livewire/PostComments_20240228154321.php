<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;

class PostComments extends Component
{
    public Post $post;
    #[Rule('required|min:3|max:200')]
    public string $comment;

    #[Rule('required|min:3|max:200')]
    public string $feedback;

    public function postComment(){
      $this->validateOnly('comment');

      $this->reset('')
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
