<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Typing Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css') }}" />
</head>

<body>
<header>
        <nav class="navbar navbar-fixed-top">
            <div class="container">
              <a class="navbar-logo" href="{{url('/race')}}"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
              <ul class="navbar-links">
                    <li><a href="{{url('/recent')}}">Recent Results</a></li>
                    <li><a href="{{url('/dashboard')}}">Profile</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
   
  @yield('content')

  <footer class="footer navbar-fixed-bottom">
    <div class="container">
        <div class="footer-content">
            <div class="footer-links">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 My Web Project. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>