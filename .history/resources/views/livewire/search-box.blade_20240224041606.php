
    <div class="row pb-4">
        <div class="col-lg-6" style="color:#fff;">
           @if($search)
           Searching {{$search}}
           @endif 
        </div>
      <div class="col-lg-6">
        @if($search)
        Searching {{$search}}
        @endif 
          {{-- <input wire:model.live.debounce.300ms="search" name="name" type="text" id="name" placeholder="Search..." required=""> --}}
           <input wire:model="search" name="name" type="text" id="name" placeholder="Search..." required="">
       
      <x-button wire:click="update">Search</x-button></div>
     
    </div>
