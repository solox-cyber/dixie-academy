<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;

class PostList extends Component
{
    #[Url()]
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    public function posts()
    {
      return  Post::published()->orderBy('published_at','desc')->paginate(6);
    }
    

    public function render()
    {
        return view('livewire.post-list');
    }
}
