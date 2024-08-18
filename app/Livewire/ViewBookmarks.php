<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class ViewBookmarks extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.view-bookmarks')->with([
            'bookmarks' => Auth::user()->bookmarks,
        ]);
    }
}
