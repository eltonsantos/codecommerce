@extends("welcome")

@section("content")
    <div class="container">
        <h1>Products</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Featured?</th>
                <th>Recommend?</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->featured == 0)
                            <i class="glyphicon glyphicon-ok-circle icon-green"></i>
                        @else
                            <i class="glyphicon glyphicon-remove-circle icon-red"></i>
                        @endif

                    </td>
                    <td>
                        @if($product->recommend == 0)
                            <i class="glyphicon glyphicon-thumbs-up icon-green"></i>
                        @else
                            <i class="glyphicon glyphicon-thumbs-down icon-red"></i>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('products.edit', ['id' => $product->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{{ route('products.destroy', ['id' => $product->id]) }}"><i class="glyphicon glyphicon-trash icon-red"></i></a>
                    </td>

                </tr>
            @endforeach
        </table>

        <a href="{{ route('products.create') }}">
            <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> New Product</button>
        </a>

    </div>
@endsection