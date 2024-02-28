<div x-data="{
    query: '{{}}'
}">


    <div class="row mb-4">
        <div class="col-lg-6" style="color:#f5a425!important;">
           @if($search)
           Searching {{$search}}
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
