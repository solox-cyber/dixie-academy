<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;
use App\Models\Post;

class PostList extends Component
{
    #[Url()]
    u
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    public function posts()
    {
      return Post::published()->orderBy('published_at', $this->sort)->paginate(6);
    }
    

    public function render()
    {
        return view('livewire.post-list');
    }
}
