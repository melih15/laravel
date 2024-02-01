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

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container">
          <a href="{{ url('/home') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Home</strong>
          </a>
          <a href="{{ url('/gallery') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Gallery</strong>
          </a>
          <a href="{{ url('/blog') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Blog</strong>
          </a>
          <a href="{{ url('/about') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>About</strong>
          </a>
          <a href="{{ url('/contact') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Contact</strong>
          </a>
        </div>
      </div>
    </header>
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <a href="{{ asset('/home') }}" class="nav-link">Home</a>
                <a href="{{ asset('/gallery') }}" class="nav-link">Gallery</a>
                <a href="{{ asset('/blog') }}" class="nav-link">Blog</a>
                <a href="{{ asset('/about') }}" class="nav-link">About</a>
                <a href="{{ asset('/contact') }}" class="nav-link">Contact</a>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <span class="footer-title">Contact & Support</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link"><i class="fas fa-phone"></i>+31 612345678</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
                </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 footer-column">
            <a href="{{ asset('/login') }}" target="_blank" class="nav-link">Admin</a>
        </div>

        <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
        
        <div class="row text-center">
        <div class="col-md-4 box">
            <span class="copyright quick-links">Copyright &copy; Your Website <script>document.write(new Date().getFullYear())</script>
            </span>
        </div>
        <div class="col-md-4 box">
            <ul class="list-inline social-buttons">
            <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            </li>
            <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </li>
            </ul>
        </div>
        <div class="col-md-4 box">
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