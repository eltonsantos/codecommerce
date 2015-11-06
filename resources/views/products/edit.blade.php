@extends("welcome")

@section("content")
    <div class="container">
        <h1>Edit Product: {{ $product->name }}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price') !!}
            {!! Form::text('price', $product->price, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('featured', 'Featured?') !!}
            {!! Form::select('featured', ['1' => 'Yes', '0' => 'No'], $product->featured) !!}
        </div>
        <div class="form-group">
            {!! Form::label('recommend', 'Recommend?') !!}
            {!! Form::radio('recommend', '1', ($product->recommend) ? true : false, ['class' => 'field']) !!} Yes
            {!! Form::radio('recommend', '0', (!$product->recommend) ? true : false, ['class' => 'field']) !!} No
        </div>
        <div class="form-group">
            {!! Form::submit('Save Product', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection