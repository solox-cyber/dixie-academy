<div class="col-lg-12 pt-5">
    <div class="filters">
        <ul>
            {{-- <li data-filter="*" class="active">All</li> --}}
            {{-- <li data-filter=".soon">Featured</li> --}}
            <li class="{{ $sort === 'desc' ? 'active' : '' }}" wire:click="setSort('desc')">Latest</li>
            <li class="{{ $sort === 'asc' ? 'active' : '' }}" wire:click="setSort('asc')">Oldest</li>
           @foreach($categories as $category)
          {{$category->title}}
           @endforeach

        </ul>
    </div>
</div>
