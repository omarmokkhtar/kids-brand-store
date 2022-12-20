<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
            }

            .price {
                color: grey;
                font-size: 22px;
            }

            .card button {
                border: none;
                outline: 0;
                padding: 12px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            .card button:hover {
                opacity: 0.7;
            }
        </style>
    </head>
    <body>
    <div>
        @foreach ($products as $product)
            <div class="card">
                <img src={{$product['g:image_link']}}  style="width:100%">
                <h1>{{$product['title']}}</h1>
                <p class="price">{{$product['g:price']}}</p>
                <p>{{$product['description']}}</p>
                @foreach($product['size']  as $size)
                    <p>{{$size}}</p>
                @endforeach
            </div>
        @endforeach
    </div>
    <div >
        {!! $products->links() !!}
    </div>
    </body>
</html>
