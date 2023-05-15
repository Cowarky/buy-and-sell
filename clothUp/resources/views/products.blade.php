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
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.qeJOG5X6Q6P5OqOqgxWpiAHaEq%26pid%3DApi&f=1&ipt=a38af0f4ceb5fa7cf5be97f1609af44406b89815151e0d5e1c949ed829c43a5d&ipo=images"
                    alt="">
                    <p>
                        {{ $prod->name}}
                    </p>
                    <button > Add to cart </button>
                    <!-- {{$count++}} -->
                   </div>
                   
                </div>
            @endforeach

        </div>
        
    </div>
</body>
</html>