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
        $this->sort = ($sort === 'desc')
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}
