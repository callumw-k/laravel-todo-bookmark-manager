<?php

namespace App\Livewire;

use Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class ViewTodos extends Component
{
    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.view-todos')->with(['todos' => Auth::user()->todos]);
    }
}
