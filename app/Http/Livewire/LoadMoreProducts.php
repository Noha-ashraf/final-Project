<?php

namespace App\Http\Livewire;

use App\Models\product;

// use App\Models\product;
use Livewire\Component;

class LoadMoreProducts extends Component
{

    public $amount = 6;

    public function render()
    {
        $products = product::take($this->amount)->get();
        return view('Livewire.LoadMoreProducts', compact('products'));
    }
    public function load()
    {
        $this->amount += 6;
    }
}
