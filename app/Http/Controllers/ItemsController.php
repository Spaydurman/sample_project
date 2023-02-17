<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock_items_tables;

class ItemsController extends Controller
{
    public function index() {
        $items = stock_items_tables::all();
        return view('listofitems')->with('items', $items);
    }

    public function edit_item($product_id) {
        $item = stock_items_tables::where('product_id', $product_id)->first();
        // var_dump($item );
        return view('edititem')->with('item', $item);

    }

    public function update_item(Request $request) {
        $item = stock_items_tables::where('product_id', $request->product_id)->first();
       
        $item->product_name = $request->input('product_name');
        $item->product_type = $request->input('product_type');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');
        $item->update();
        $items = stock_items_tables::all();
        return view('listofitems')->with('items', $items);
    }

    public function delete_item($product_id){
        $item = stock_items_tables::where('product_id', $product_id);
        $item->delete();
        $items = stock_items_tables::all();
        return view('listofitems')->with('items', $items);
    }
}
