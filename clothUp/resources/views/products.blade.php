<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - buy modern clothes from our store</title>
</head>
<body>
    @include('layout.app')
    <div class="products-page-container">
        <h1 style="text-align: center;">
            Products
        </h1>
        <div class="products-container">
           <!-- {{$count = 1}} -->
            @foreach($products as $prod)
                <div class="product-container">
                   <p>
                    {{$count}}
                   </p>
                   <div class="image-wrapper">
                    <img src="{{ asset('images/'.$prod->image) }}"
                    alt="Image is not available">
                    <p>
                        {{ $prod->name}}
                    </p>
                    <p>
                        {{ $prod->description}}
                    </p>    
                    <form action="{{ url('product/'.$prod->ID) }}" method="get">
                    <!-- {{$count++}} -->
                    <button type="submit"> Add to cart</button>
                    </form>
                   </div>
                   
                </div>
            @endforeach

        </div>
        
    </div>
</body>
</html>