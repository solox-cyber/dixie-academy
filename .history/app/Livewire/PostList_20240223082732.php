<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;
use Livewire\Attributes\Computed;
use App\Models\Post;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
   
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    public function mount(){
        return Post::published()->orderBy('published_at')->paginate(6);
    }

#[Computed()]
    public function posts()
    {
      return Post::published()->orderBy('published_at', $this->sort)->paginate(6);
    }
    

    public function render()
    {
        return view('livewire.post-list');
    }
}
