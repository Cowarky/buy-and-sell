<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Clothup - buy modern clothes here</title>
</head>
<body>
    <div class="navbar-container">
        <div class="logo-container">
            <!-- IMG -->
            <!-- LOGO -->
        </div>
    
        <div class = "navbar">
            <div class="home-container">
                <p>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </p>
            </div>
            <div class="aboutus-container">
                <p>
                    <a href="{{ url('/aboutus') }}">
                        About us
                    </a>
                </p>
            </div>
            <div class="contactus-container">
                <p>
                    <a href="{{ url('/contactus') }}">
                        Contact us
                    </a>
                </p>
            </div>
            <div class="products-container">
                <p>
                    <a href="{{ url('/products') }}">
                        Products
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>