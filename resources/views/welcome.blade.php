<!DOCTYPE html>
<html>
    <head>
        <title>CodeCommerce</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    </head>
    <body>
        <div class="container">
            <h1><a href="#">Loja CodeCommerce</a></h1>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">Products</a>
                    </li>
                </ul>
            </nav>
            @yield("content")
        </div>
    </body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</html>
