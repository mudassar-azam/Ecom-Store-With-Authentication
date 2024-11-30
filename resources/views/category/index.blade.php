@extends("layouts.app")

@section('content')
<div style="display:flex;align-items:center;justify-content:center;1em 0em;">
    <h1>Categories</h1>
</div>

<div style="margin: 3em 7em;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Category Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><img style="width:100px;height:100px;" src="{{ asset('catimages/' . $category->image) }}"></td>
                    <td>
                        <button class="btn btn-success" onclick="redirectToEdit({{ $category->id }})">Edit</button>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
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
        window.location.href = "{{ route('category.edit', ['id' => '__ID__']) }}".replace('__ID__', id);
    }
</script>

@endsection
