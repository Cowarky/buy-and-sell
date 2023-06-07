    @include('layout.app')
    <div class="products-page-container">
        <h1 style="text-align: center;">
            Products
        </h1>
        @include('layout.categoryList')
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