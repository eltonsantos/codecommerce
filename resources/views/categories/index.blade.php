@extends("welcome")

@section("content")
    <div class="container">
        <h1>Categories</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{{ route('categories.destroy', ['id' => $category->id]) }}"><i class="glyphicon glyphicon-remove"></i></a>
                </td>

            </tr>
            @endforeach
        </table>

        <a href="{{ route('categories.create') }}">
            <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> New Category</button>
        </a>

    </div>
@endsection