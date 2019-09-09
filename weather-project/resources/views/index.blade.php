@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(isset($alert))
    {{$alert}}
    @endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

</head>


<body>
<div class="hero" data-bg-image="images/thanhpho.jpg">

    <div class="site-content">
        <div class="site-header">
            <div class="container">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Weather</h1>
                    <small class="site-description">2019</small>
                </div>
                </a>

                <!-- Default snippet for navigation -->
                <div class="main-navigation">
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>

            </div>
        </div> <!-- .site-header -->

        <div class="container">
            <form method="get" action="{{route('weather.getAll')}}" class="find-location">
                @csrf
                <input type="text" name="cityname" placeholder="Find your location...">
                <input type="submit" value="Find">
            </form>

        </div>

        <div class="forecast-table">
            <div class="container">
                <div class="forecast-container">
                </div>
            </div>
        </div>
        <main class="main-content">
            <div class="fullwidth-block">
            </div>

            <div class="fullwidth-block">
            </div>

            <div class="fullwidth-block">
                <div class="container">
                </div>
            </div>
        </main> <!-- .main-content -->
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter your email to subscribe...">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>

        <p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
    </div>
</footer> <!-- .site-footer -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>
