<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{

  public $todos = ['red', 'yellow', 'blue'];

  public $todo = '';

  public function add()
  {
    $this->todos[] = $this->pull('todo');

  }

}
