@extends("welcome")

@section("content")
    <div class="container">
        <h1>Create Product</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'products.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('featured', 'Featured?') !!}
            {!! Form::select('featured', ['0' => 'Yes', '1' => 'No'], '1') !!}
        </div>
        <div class="form-group">
            {!! Form::label('recommend', 'Recommend?') !!}
            {!! Form::radio('recommend', '0', true) !!} Yes
            {!! Form::radio('recommend', '1', false) !!} No
        </div>
        <div class="form-group">
            {!! Form::submit('Add Product', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection