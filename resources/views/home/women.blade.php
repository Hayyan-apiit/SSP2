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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Womens Collection</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <!---
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
              
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  
                  </div>
                -->
                </div>
            
              </div>
            </div>




            <div class="row mb-5">

@foreach($store as $stores)
  <div class="col-md-3 mb-4" data-aos="fade-up">

    <div class="block-4 text-center border">
      <figure class="block-4-image">
        <a href="{{url('store_details',$stores->id)}}"><img src="/add_garment/{{$stores->image}}" alt="Image placeholder" class="img-fluid"></a>
      </figure>
      <div class="block-4-text p-4">
        <h3><a href="shop-single.html">{{$stores->title}}</a></h3>
         @if($stores->discount_price!=null)
         <p class="text-primary font-weight-bold" style="color: red !important;">Discount Price: {{$stores->discount_price}}</p>


        <p class="text-primary font-weight-bold" style="text-decoration: line-through;">Selling:Rs:{{$stores->price}}</p>

        @else
        <p class="text-primary font-weight-bold" style="margin-top: 40px;">Selling: Rs:{{$stores->price}}</p>




        @endif
      </div>
    </div>

  </div>
  @endforeach
</div>




    
<div class="row" data-aos="fade-up">
    <div class="col-md-12 text-center">
        <div class="site-block-27">
            <ul>
                <li><a href="{{ $store->previousPageUrl() }}">&lt;</a></li>

                @for ($i = 1; $i <= $store->lastPage(); $i++)
                    <li class="{{ $store->currentPage() == $i ? 'active' : '' }}">
                        <a href="{{ $store->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <li><a href="{{ $store->nextPageUrl() }}">&gt;</a></li>
            </ul>
        </div>
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