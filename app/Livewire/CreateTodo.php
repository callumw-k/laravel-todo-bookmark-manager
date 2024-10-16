<?php

namespace App\Livewire;

use Auth;
use DateTime;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTodo extends Component
{

    #[Validate('required|string')]
    public string $title;
    #[Validate('required|date')]
    public DateTime $due_date;

    public function save(): void
    {
        $this->validate();
        $newTodo = Auth::user()->todos()->create($this->pull(['title', 'due_date']));
        Redis::publish('update-todo-channel', json_encode(['title' => $newTodo->title]));
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.create-todo');
    }
}
