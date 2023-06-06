<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to ClothUp</title>
</head>
<body>
    @include('layout.app')

    <div class="products-page-container">
        
            <div class="cover-image-wrapper">
                <img src="{{ asset('images/store-image.jpg') }}" alt="">
                
                <div class="landing-page-text-container">
                    <h1>
                        ClothUp
                    </h1>
                </div>
                <div class="landing-page-text-container">
                    <h2>
                        Your Modern Clothes Store
                    </h2>
                </div>
            </div>
                
    </div>
</body>
</html>