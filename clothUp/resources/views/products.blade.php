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
        <div class="category-wrapper">
            <h4>
                Categories
            </h4>
            <hr>
            <ul>
                <a onclick="ToggleList('Top-list',this)">
                    <div class="button-image-wrapper">
                        <img src="{{ asset('images/minus-green-button.jpg') }}" alt="">
                        
                    </div>
                    Tops
                </a>
                <ul id="Top-list">
                    <li>
                        <a href="">
                            T-shirts
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            shirts
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Long sleeve
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Polo shirts
                        </a>
                    </li>
                </ul>
                
            </ul>
            <hr>
            <ul>
                <a onclick="ToggleList('bottom-list',this); ">
                    <div class="button-image-wrapper">
                        <img src="{{ asset('images/plus-button.jpg') }}" alt="" >
                        
                    </div>
                    Bottom
                </a>
                <ul id="bottom-list">
                    <li>
                        <a href="">
                            Jeans
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Pants
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Shorts
                        </a>
                    </li>
                </ul>
            </ul>
            <hr>
            <ul>
                <a onclick="ToggleList('Shoes-list',this)">
                    <div class="button-image-wrapper">
                        <img src="{{ asset('images/plus-button.jpg') }}" alt="">
                        
                    </div>
                    Shoes
                </a>
                <ul id="Shoes-list">
                    <li>
                        <a href="">
                            Running shoes
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Basketball shoes
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="">
                            Football shoes
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
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
    <script src="{{ asset('javascript/main.js') }}"></script>
</body>
</html>