@extends('sidebar')

@section('content')
    <div class="header-container">
        <h1 class="additemheader">Edit Item</h1>
    </div>
    <div class="additem">
        <form action="{{ route('update_item')}}" method="post">
            @csrf
            <!-- @method('PUT') -->
            <div class="product">
                <div class="prod">
                    <input type="hidden" name="product_id" id="product_name" class="ant-input"  value="{{ $item->product_id }}">
                    <label for="product_name" >Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="ant-input"  value="{{ $item->product_name }}">
                    @error('product name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="prod">
                    <label for="product_type" >Product Type</label>
                    <input type="text" name="product_type" id="product_type" class="ant-input" value="{{ $item->product_type}}">
                    @error('product type')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="priceqty">
                <div class="prod">
                    <label for="price" >Price</label>
                    <input type="number" name="price" id="price"  class="ant-input" value="{{ $item->price}}">
                    @error('price')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="prod">
                    <label for="quantity" >Quantity</label>
                    <input type="number" name="quantity" id="quantity"  class="ant-input" value="{{ $item->quantity}}">
                        @error('quantity')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>
            <div class="savebtn-container">
                <button class="savebtn">Save Item</button>
            </div>
        </form>
    </div>
@endsection