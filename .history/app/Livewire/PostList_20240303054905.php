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

    #[Url()]
    public $popular = false;

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }



    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()->orderBy('published_at', $this->sort)
            ->when($this->activeCategory, function ($query) {
                $query->WithCategory($this->category);
            })->when($this->popular, function ($query) {
                $query->withCount('likes')
            })
            ->where('title', 'like', "%{$this->search}%")->paginate(6);
    }

    #[Computed()]
    public function activeCategory()
    {
        return Category::where('slug', $this->category)->first();
    }

    public function render()
    {
        return view('livewire.post-list',  [
            'categories' => Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(10)->get(),
            // 'categories' => Category::take(10)->get(),
        ]);
    }
}
