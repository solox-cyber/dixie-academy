<div class="col-lg-12 pt-5">
    <div class="filters">
        <ul>
            {{-- <li data-filter="*" class="active">All</li> --}}
            {{-- <li data-filter=".soon">Featured</li> --}}
            <x-checkbox/>
            <x-label>Popular</x-label>

<li class="{{ $sort === 'desc' ? 'active' : '' }}" wire:click="setSort('desc')">Popular</li>
            <li class="{{ $sort === 'desc' ? 'active' : '' }}" wire:click="setSort('desc')">Latest</li>
            <li class="{{ $sort === 'asc' ? 'active' : '' }}" wire:click="setSort('asc')">Oldest</li>
            @foreach($categories as $category)
            <x-badge wire:navigate href="{{route('blog', ['category' => $category->slug])}}"
                :textColor="$category->text_color" :bgColor="$category->bg_color">
                {{ $category->title }}
            </x-badge>

            @endforeach


        </ul>
    </div>
</div>
