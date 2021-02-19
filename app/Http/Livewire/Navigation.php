<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Navbar;

class Navigation extends Component
{
    public function render()
    {
        // $navbars = Navbar::all();
        $categories = Category::all();

        return view('livewire.navigation', compact('categories'));
    }
}
