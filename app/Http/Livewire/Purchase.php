<?php

namespace App\Http\Livewire;

use App\Models\Shop;
use App\Models\Stock;
use Livewire\Component;
use App\Models\TempOrder;
use Illuminate\Http\Request;

class Purchase extends Component
{
    public $shop;
    public $product;
    public $stock_id ,$quantity, $reference;

    public $orderReference, $rorders;

    public function mount(Request $request)
    {
        $this->orders = $request->session()->get('tempOrder');
    }

    public function addProduct(Request $request)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'stock_id' => $this->stock_id,
            'quantity' => $this->quantity,
            'reference' => $this->reference
        ];
        $request->session()->push('tempOrder', $data);
        // $result = $request->session()->get('tempOrder');

        // dd($result);
        
        // TempOrder::create([
        //     'user_id' => 1,
        //     'stock_id' => $this->stock_id,
        //     'quantity' => $this->quantity,
        //     'reference' => $this->reference
        // ]);

        $this->quantity = '';
        $this->stock_id = '';
    }

    public function store()
    {
        $orders = TempOrder::where('reference', $this->orderReference)->get();
        foreach ($orders as $order) {
            $stock = Stock::find($stock_id);
            $stock->update([
                'quantity' => $stock->quantity + $order->quantity
            ]);
        }
        
    }

    public function removeOrder()
    {
        dd($this->orderReference);
    }

    public function render()
    {
        // Get Shop
        $shops = Shop::all();

        // Get Stock
        $stocks = Stock::all();
        
        // Get Stock
        // $orders = TempOrder::all();

        // Reference
        $this->orderReference = mt_rand(1000000000, 9999999999);
        
        return view('livewire.purchase', compact('shops', 'stocks', 'orders', 'orderReference'));
    }
}
