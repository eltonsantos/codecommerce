@extends("welcome")

@section("content")
    <div class="container">
        <h1>Categories</h1>
        <a href="{{ route('categories.create') }}">
            <button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> New Category</button>
        </a>
        <br /><br />
        @if($categories->isEmpty())
            <div class="alert alert-warning"> Nenhuma categoria cadastrado!</div>
        @else
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
                            <a href="{{ route('categories.destroy', ['id' => $category->id]) }}"><i class="glyphicon glyphicon-trash icon-red"></i></a>
                        </td>

                    </tr>
                @endforeach
            </table>

            {!! $categories->render() !!}

        @endif

    </div>
@endsection