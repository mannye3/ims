<?php

namespace App\Http\Livewire;

use App\Models\Shop;
use App\Models\Stock;
use Livewire\Component;
use App\Models\TempOrder;

class Purchase extends Component
{
    public $product;
    public $reference;
    public $stock_id;
    // public $orders;

    public function mount()
    {

    }

    public function addProduct()
    {
        $this->reference = str_random(15);
        TempOrder::create([
            'user_id' => 1,
            'stock_id' => $this->stock_id,
            'reference' => $this->reference
        ]);
    }

    public function render()
    {
        // Get Shop
        // $shops = Shop::all();

        // Get Stock
        $stocks = Stock::all();
        
        // Get Stock
        $orders = TempOrder::all();
        
        return view('livewire.purchase', compact('shops', 'stocks', 'orders'));
    }
}
