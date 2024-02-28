<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use App\Models\Post;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
   
    public $sort = 'desc';
    public $search = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    public function mount(){
        return Post::published()->orderBy('published_at')->paginate(6);
    }

    #[On('search')]
    public function updateSearch($search){
     $this->search = $search;
    }

#[Computed()]
    public function posts()
    {
      return Post::published()->orderBy('published_at', $this->sort)
      ->where('title', 'like', "%{$this->search}%")->paginate(6);
    }
    

    public function render()
    {
        return view('livewire.post-list');
    }
}
