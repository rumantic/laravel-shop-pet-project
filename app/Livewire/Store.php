<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class Store extends Component
{
    public $items;

    public function mount($category = null)
    {
        $this->items = Item::all();
    }

    public function render()
    {
        return view('livewire.store');
    }
}
