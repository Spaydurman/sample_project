<?php

namespace App\Http\Controllers;

use App\Models\stock_items_tables;
use Illuminate\Http\Request;

class AddNewItemController extends Controller
{
    public function index() {
        return view('addnewitem');
    }

    function additem(Request $request){
        $this->validate($request, [
            'product_name'=> 'required',
            'product_type'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
        ]);

        stock_items_tables::create([
            'product_name' => $request->product_name,
            'product_type'=> $request->product_type,
            'price'=> $request->price,
            'quantity' => $request->quantity,
        ]);

        $items = stock_items_tables::all();
        return view('listofitems')->with('items', $items);
    }
}
