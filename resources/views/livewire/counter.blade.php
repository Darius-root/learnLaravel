<div style="text-align: center">

<div class="">
   <p>User connect: </p> {{ $userName}}
</div>
    <button wire:click="increment" class="btn btn-primary">+</button>
    <button wire:click="decrement"  class="btn btn-danger">-</button>

    <h1>{{ $count }}</h1>
    <h3>Le titre est : {{$title}}</h3>
    <input type="text" id="title" wire:model="title"> 

</div>