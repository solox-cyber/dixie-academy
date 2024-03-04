<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class PostComments extends Component
{
    use WithPagination
    public Post $post;
    #[Rule('required|min:3|max:200')]
    public string $comment;
    
    public function postComment(){
      $this->validateOnly('comment');
     $this->post->comments()->create([
         'comment' => $this->comment,
         'user_id' => auth()->id()
     ]);
      $this->reset('comment');
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
