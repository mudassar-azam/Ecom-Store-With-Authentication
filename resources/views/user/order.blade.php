@extends("layouts.user.app2")
@section('content')
<div style="display:flex;align-items:center;justify-content:center;1em 0em;">
    <h1>Orders</h1>
</div>

<div style="margin: 3em 7em;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Title</th>
                <th scope="col">Product Price</th>
                <th scope="col">Discounted Price</th>
                <th scope="col">Description</th>
                <th scope="col">Review</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $product)
                <tr>
                    <td><img style="width:100px;height:100px;" src="{{ asset('product-images/' . $product->product->image) }}"></td>
                    <td>{{$product->product->name}}</td>
                    <td>{{$product->product->title}}</td>
                    <td>{{$product->product->price}}</td>
                    <td>{{$product->product->discount}}</td>
                    <td>{{$product->product->description}}</td>
                    <td>{{$product->product->review}}</td>
                    <td>{{$product->product->category->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection