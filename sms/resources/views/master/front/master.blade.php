<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-info shadow sticky-top">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                <li><a href="{{route('user-login')}}" class="nav-link">Login</a></li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
            </ul>
        </div>
    </nav>
@yield('body')
<footer class="pt-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-body rounded-0 bg-dark text-white border-0">
                    <h3>About Institute</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequuntur minus natus? Asperiores ea, eligendi id illum itaque laudantium nam nemo officia quas rerum saepe sequi sunt, velit vero voluptatibus.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-body rounded-0 bg-dark text-white border-0">
                    <h3>Popular Link</h3>
                    <hr/>
                    <ul>
                        <li><a href="">Popular Course One</a></li>
                        <li><a href="">Popular Course Two</a></li>
                        <li><a href="">Popular Course Three</a></li>
                        <li><a href="">Popular Course Four</a></li>
                        <li><a href="">Popular Course Four</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-body rounded-0 bg-dark text-white border-0">
                    <h3>Follow Us</h3>
                    <hr/>
                    <ul class="nav">
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-whatsapp"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-behance"></i></a></li>
                        <li ><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="bg-white mt-5"/>
        <div class="row">
            <div class="col-12">
                <p class="text-white text-center">Copyright@2022, All right receive by Salah Uddin</p>
            </div>
        </div>
    </div>
</footer>
    <script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
    <script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
