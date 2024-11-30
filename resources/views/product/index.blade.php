@extends("layouts.app")

@section('content')
<div style="display:flex;align-items:center;justify-content:center;1em 0em;">
    <h1>Products</h1>
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img style="width:100px;height:100px;" src="{{ asset('product-images/' . $product->image) }}"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->review}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <button class="btn btn-success" onclick="redirectToEdit({{ $product->id }})">Edit</button>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function redirectToEdit(id) {
        window.location.href = "{{ route('product.edit', ['id' => '__ID__']) }}".replace('__ID__', id);
    }
</script>

@endsection
