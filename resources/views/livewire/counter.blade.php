<div>
  <h1>{{ $count }}</h1>

  <button wire:click="increment">+</button>

  <button wire:click="decrement">-</button>

  <h3>Time is {{time()}}</h3>

{{--  <button wire:click="$refresh">Refresh the page</button>--}}
</div>
