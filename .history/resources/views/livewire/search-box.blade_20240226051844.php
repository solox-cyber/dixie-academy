<div x-data="{
    query: '{{ request('search', '')}}'
}">


    <div class="row mb-4">
        <div class="col-lg-6" style="color:#f5a425!important;">
            <template x-if="query">
              <h4 style="color:#f5a425!important;"> Searching <span x-text="query"></span></h4>
            </template>
            <template x-if="!query">
                <h4>  No Search </h4>
            </template>
            @if ($this->acti)

            @endif
        </div>
      <div class="col-lg-6">

          {{-- <input wire:model.live.debounce.300ms="search" name="name" type="text" id="name" placeholder="Search..." required=""> --}}
           <input x-model="query" name="name" type="text" id="name" placeholder="Search..." required="" style="border-radius:20px">

      <x-button x-on:click="$dispatch('search',{
        search: query
      })">Search</x-button></div>

    </div>

</div>
