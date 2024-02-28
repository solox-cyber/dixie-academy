<div class="col-lg-12">
    <div class="filters">
      <ul>
        <li data-filter="*"  class="active">All</li>
        {{-- <li data-filter=".soon">Featured</li> --}}
        <li wire:click="setSort('asc')">Oldest</li>
        <li wire:click="setSort('desc')">Latest</li>
        <li data-filter=".att">Attractive</li>
      </ul>
    </div>
  </div>


  <div class="col-lg-12">
    <div class="row grid">
      @foreach ($this->posts as $post)
      <div class="col-lg-4 templatemo-item-col all soon">
        <x-posts.post-card  :post="$post"/>
      </div>
    @endforeach
    </div>

       

  </div>