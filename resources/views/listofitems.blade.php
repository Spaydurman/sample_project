@extends('sidebar')

@section('content')
    <div class="header-container">
        <h1 class="additemheader">List of Items</h1>
    </div>
    <div class="list-of-items-tables">
        <table class="loi-table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $prod)
                <tr>
                    <td>{{ $prod->product_id}}</td>
                    <td>{{ $prod->product_name}}</td>
                    <td>{{ $prod->product_type}}</td>
                    <td>{{ $prod->price}}</td>
                    <td>{{ $prod->quantity}}</td>
                    <td>
                        <a href="{{ route('edititem', $prod->product_id)}}"><button class="editbtn">Edit</button></a>
                        <a href="{{ route('delete_item', $prod->product_id)}}"><button class="deletebtn">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection