<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComments extends Component
{
    public Post $post;

    #[Computed()]
    public function posts()
    {
        return Post::published()->orderBy('published_at', $this->sort)
            ->when($this->activeCategory, function ($query) {
                $query->WithCategory($this->category);
            })
            ->where('title', 'like', "%{$this->search}%")->paginate(6);
    }

    #[Computed()]
    public function comments(){

    }

    public function render()
    {
        return view('livewire.post-comments');
    }
}
