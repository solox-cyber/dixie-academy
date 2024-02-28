<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\url;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use App\Models\Post;
use App\Models\Category;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[Url()]
    public $category = '';
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
      ->when(Category::where('slug', $this->category)->first(), function($query){
         $query->scopeWithCateogry($this->category);
      })
      ->where('title', 'like', "%{$this->search}%")->paginate(6);
    }


    public function render()
    {
        return view('livewire.post-list',  [
            // 'categories' => Category::whereHas('posts', function($query){
            //     $query->published();
            // })->take(10)->get(),
        ]);
    }
}
