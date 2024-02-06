<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column" style="padding: 0;">
                <a href="{{ asset('/home') }}" class="nav-link">Home</a>
                <a href="{{ asset('/gallery') }}" class="nav-link">Gallery</a>
                <a href="{{ asset('/blog') }}" class="nav-link">Blog</a>
                <a href="{{ asset('/about') }}" class="nav-link">About</a>
                <a href="{{ asset('/contact') }}" class="nav-link">Contact</a>
                <a href="{{ asset('/login') }}" target="_blank" class="nav-link">Admin</a>
            </div>
            
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column" style="text-align: right; padding-left: 58%;">
                <li class="nav-item">
                    <span class="footer-title">Contact & Support</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link"><i class="fas fa-phone"></i>+31 612345678</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-envelope"></i>Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-star"></i>Give feedback</a>
                </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 box" style="padding: 0;">
            <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                    <a href="#" class="fa fa-facebook"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="fa fa-instagram"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="fa fa-linkedin"></a>
                </li>
            </ul>
        </div>
        <div class="row text-center">
        <div class="col-md-4 box">
            <span class="copyright quick-links">Copyright &copy; Your Website <script>document.write(new Date().getFullYear())</script>
            </span>
        </div>
        
        <div class="col-md-4 box" id="TermsOfUse">
            <ul class="list-inline quick-links">
            <li class="list-inline-item">
                <a class="termly" href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
                <a class="termly" href="#">Terms of Use</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
</footer>
</html>