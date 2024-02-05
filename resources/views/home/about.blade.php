<!DOCTYPE html>
<html lang="en">
  <head>
    <title>sspCloth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="user/fonts/icomoon/style.css">

    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/magnific-popup.css">
    <link rel="stylesheet" href="user/css/jquery-ui.css">
    <link rel="stylesheet" href="user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="user/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="user/css/aos.css">

    <link rel="stylesheet" href="user/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">SriLux Fashion</a>
              </div>
            </div>

                
            @php
  $totalItems = 0;

  // Calculate the total number of items in the cart
  foreach($cart as $item) {
    $totalItems += $item->quantity;
  }
@endphp

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="{{url('show_userorder')}}"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="{{url('show_cart')}}" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>

                      @auth
            <span class="count">{{ $totalItems }}</span>
          @endauth
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>


          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="has-children">
              <a href="{{url('shop')}}">Shop</a>
              <ul class="dropdown">
                <li><a href="{{url('men')}}">Men Collections</a></li>
                <li><a href="{{url('women')}}">women Collections</a></li>
                <li><a href="{{url('kid')}}">Kids collections</a></li>
              </ul>
            </li>
            <li><a href="{{url('about')}}">About</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
            <li>
            
            @if (Route::has('login'))

@auth
<li class="nav-item">
<form method="POST" action="{{ route('logout') }}" class="inline">
@csrf
<button type="submit" id="logincss" class="btn btn-primary">
 {{ __('Log Out') }}
</button>
</form>
</li>
@else

<li class="nav-item">
   <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
</li>

<li class="nav-item">
   <a class="btn btn-success" href="{{ route('register') }}">Register</a>
</li>
@endauth
@endif

            </li>
          </ul>
        </div>
      </nav>
    </header>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
            <figure style="padding-top: 40px;">
                <img src="user/images/aboutimg.jpg" alt="Image placeholder" class="img-fluid rounded">
                

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4" >
              <h2 class="text-black"  style="color: black;">How We Started</h2>
            </div>
            <p  style="color: black;">
            Welcome to [Your Store Name], where fashion meets passion and style tells a story. Our journey started with a simple idea – to create a space where every garment has a tale and every outfit speaks volumes.

            </p>
            <p  style="color: black;">
            In [Year of Establishment], we set out on a mission: to redefine the way you experience fashion. Our founders, [Founder Names], envisioned a curated collection that transcends trends, offering a blend of chic, comfortable, and affordable styles for everyone.
            </p>

            <p  style="color: black;">
            From the initial sketches to the carefully curated racks on our website, every step of our journey is marked by dedication and creativity. We believe in the power of clothing to empower and express individuality.
            </p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Sri Lux Fashion</h2>
          </div>
        </div>
        <div class="row">
 
  
 
        <div class="">
  <div class="">
    <div class="block-38-img">
      <div class="block-38-header">
        <img src="user/images/profile.jpg" alt="Image placeholder" class="mb-4" style="width: 100px; height: auto;">
        <h3 class="" style="color: black;">Hayyan Ameen</h3>
        <p class="block-38-subheading" style="color: black;">Apiit | CS </p>
      </div>
      <div class="block-38-body">
        <p style="color: black;">
          Welcome to SRI LUX Fashion, your go-to destination for curated fashion that seamlessly blends style, comfort, and affordability. Founded with a passion for empowering individual expression, we offer a diverse collection of trendsetting garments that transcend fleeting trends. From casual chic to timeless classics, each piece is thoughtfully selected to reflect our commitment to quality and versatility. Whether you're seeking the latest runway-inspired looks or wardrobe essentials, [Your Store Name] is more than a clothing store—it's a celebration of personal style, where every garment tells a unique story. Explore our curated fashion universe and embark on a journey of self-expression with every outfit.
        </p>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">DELIVERY STOCKS</h2>
              <p>
              "Swift delivery ensures your fashion arrives promptly, reflecting our commitment to efficient service."
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">FREE RETURNS</h2>
              <p>
              "Risk-free shopping with hassle-free returns—your confidence in exploring styles is our priority, on us!"
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>
              "24/7 fashion ally: Our dedicated support ensures an exceptional experience, prioritizing your style satisfaction."
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="user/images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">No. 388 Union Pl, Colombo 00200, Sri Lanka</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">apiitssp2laravel.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
 
          
        </div>
      </div>
    </footer>
  </div>

  <script src="user/js/jquery-3.3.1.min.js"></script>
  <script src="user/js/jquery-ui.js"></script>
  <script src="user/js/popper.min.js"></script>
  <script src="user/js/bootstrap.min.js"></script>
  <script src="user/js/owl.carousel.min.js"></script>
  <script src="user/js/jquery.magnific-popup.min.js"></script>
  <script src="user/js/aos.js"></script>

  <script src="user/js/main.js"></script>
    
  </body>
</html>