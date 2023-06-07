    <div class="category-wrapper">
        <h4 style="margin-bottom: 5px">
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
            <div style="margin-left: 5px" id="Top-list">
                <li>
                    <a href="{{ url('products/t-shirt') }}">
                        T-shirts
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ url('products/shirt') }}">
                        shirts
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ url('products/long sleeve') }}">
                        Long sleeve
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ url('products/polo shirt') }}">
                        Polo shirts
                    </a>
                </li>
            </div>
            
        </ul>
        <hr>
        <ul>
            <a onclick="ToggleList('bottom-list',this); ">
                <div class="button-image-wrapper">
                    <img src="{{ asset('images/plus-button.jpg') }}" alt="" >
                    
                </div>
                Bottom
            </a>
            <div style="margin-left: 5px" id="bottom-list">
                <li>
                    <a href="{{ url('products/jeans') }}">
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
            </div>
        </ul>
        <hr>
        <ul>
            <a onclick="ToggleList('Shoes-list',this)">
                <div class="button-image-wrapper">
                    <img src="{{ asset('images/plus-button.jpg') }}" alt="">
                    
                </div>
                Shoes
            </a>
            <div style="margin-left: 5px" id="Shoes-list">
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
            </div>
        </ul>
    </div>