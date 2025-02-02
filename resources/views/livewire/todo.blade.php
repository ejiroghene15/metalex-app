<div>
  <input type="text" wire:model="todo" placeholder="Todo...">

  Todo character length: <h2 x-text="$wire.todos.length"></h2>

  <button wire:click="add">Add Todo</button>

{{--  <ul>--}}
{{--    @foreach ($todos as $todo)--}}
{{--      <li>{{ $todo }}</li>--}}
{{--    @endforeach--}}
{{--  </ul>--}}

  <ul x-data="{ colors: $wire.todos }">
    <template x-for="color in colors">
      <li x-text="color"></li>
    </template>
  </ul>

</div>