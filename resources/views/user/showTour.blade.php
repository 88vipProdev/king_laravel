<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css Stylesheet -->
    <link rel="stylesheet" href="/css/style.css" />
    <link
      rel="stylesheet"
      media=" screen and (max-width:768px)"
      href="/css/mobile.css"
    />
    <!-- unicons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- favicon -->
    <link rel="icon" href="/Imgs/icons/Vector.png" />

    <!-- script tag -->
    <script defer src="/JS/script.js"></script>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Title -->
    <title>2rism</title>
  </head>
  <body>
  
    <!-- Showcase -->
    <main class="main" id="home">
      <!-- Header -->
      <header class="header">
        <!-- logo -->
        <div class="logo">
          <img src="imgs/Logo/logo.svg" alt="2rism" />
        </div>
        
      {{-- @extends('login') --}}
        <!-- navbar -->
        <nav class="navbar">
          <ul class="navlists" style = "align-content:flex">
            <li class="navlist"><a href="#home">Home</a></li>
            <li class="navlist"><a href="#restaurants">Hotels</a></li>
            <li class="navlist"><a href="#restaurants">Restaurants</a></li>
            <li class="navlist"><a href="#tours">Tours</a></li>
            <li class="navlist"><a href="#destinations">Destinations</a></li>
           
       
            <li class="navlist"><a href="{{route("viewlogin")}}">login</a></li>
            <li class="navlist"><a href="{{ route('viewRegister') }}">register</a></li>
          </ul>
        </nav>
    
        <!-- user || navigator -->
      

                  
          <div class="profile-pic">
            <img
              src="public/Imgs/ProfilePic/137216205_455535372310646_4246514428450545374_n.jpg"
              alt=""
            />
          </div>
        </div>
      </header>
      <div class="showcase-search">
        <div class="filters">
          <div class="filter">
            <div class="search-icon">
              <img src="/Imgs/icons/location.png" alt="" />
            </div>
            <div class="search-text">
              <h4>Location</h4>
              <h2>Explore nearby </h2>
            </div>
          </div>
          <div class="filter">
            <div class="search-icon">
              <img src="/Imgs/icons/activities.png" alt="" />
            </div>
            <div class="search-text">
              <h4>Activity</h4>
              <h2>All Activities</h2>
            </div>
          </div>
          <div class="filter">
            <div class="search-icon">
              <img src="/Imgs/icons/calendar.png" alt="" />
            </div>
            <div class="search-text">
              <h4>When</h4>
              <h2>Chose a date</h2>
            </div>
          </div>
          <div class="filter">
            <div class="search-icon">
              <img src="/Imgs/icons/guest.png" alt="" />
            </div>
            <div class="search-text">
              <h4>Guests</h4>
              <h2>1 guest</h2>
            </div>
          </div>
        </div>
        <div class="search-button-icon">
          <img src="/Imgs/icons/search.svg" alt="" />
        </div>
      </div>
    </main>
    <!-- popular Destinations -->
    <section class="destinations" id="destinations">
      
      <div class="container">
        <!-- title -->
        <h2 class="section-title">Popular Destinations</h2>
        <!-- cards -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <a href="{{route('user.showCart')}}">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
          </a>
      </svg>
        <div class="swiper swiper1">
          <div class="destinations-cards swiper-wrapper">
            <!-- card 1 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1581790061118-2cd9a40164b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Big sur</h5>
              <h6>Califonia USA</h6>
            </div>
            <!-- card 2 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1527824404775-dce343118ebc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Prescott</h5>
              <h6>Arizona, USA</h6>
            </div>
            <!-- card 3 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1512936702668-1ab037aced2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Fort Mayers</h5>
              <h6>Florida, USA</h6>
            </div>
            <!-- card 4 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1121&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Tucson</h5>
              <h6>Arizona, USA</h6>
            </div>
            <!-- card 5 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1601425262040-ba23fe84f701?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>St. Joseph</h5>
              <h6>Michigan, USA</h6>
            </div>
            <!-- card 6 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1539037116277-4db20889f2d4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Madrid</h5>
              <h6>Spain</h6>
            </div>
            <!-- card 7 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1542321993-8fc36217e26d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Senja Island</h5>
              <h6>Norway</h6>
            </div>
            <!-- card 8 -->
            <div class="destination-card swiper-slide">
              <img
                src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80"
                alt=""
                width="203"
                height="181"
              />
              <h5>Eiffel Tower</h5>
              <h6>Paris France</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hotel-restaurants" id="restaurants">
        <div class="container">
            <h1>Danh sách Tour</h1>
            <div class="product-list">
                @foreach ($datalist as $listItem)
                    <div class="product-item">
                        <div class="card">
                            <div class="card-body">
                                <h2>{{ $listItem->name }}</h2>
                                <div class="image-container">
                                    <img class="product-image" src="{{ asset('storage/'.$listItem->image) }}" alt="{{ $listItem->name }}">
                                </div>
                                <p>{{ $listItem->location }}</p>
                                <p>{{ $listItem->price }}</p>
                                <p>
                                    <form action="{{ route("user.addtocart", $listItem->id) }}" method="post">
                                        @method('post')
                                        @csrf
                                        <button type="submit">Add to Cart</button>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
          <div class="footer-sections">
            <div class="footer-section">
              <img src="/Imgs/Logo/logoblack.svg" alt="">
              <p>We always make our customers happy by providing as many choises as possible</p>
              <div class="footer-social-icons">
                <img src="/Imgs/icons/facebook.png" alt="">
                <img src="/Imgs/icons/twitter.png" alt="">
                <img src="/Imgs/icons/instagram.png" alt="">
              </div>
            </div>
  
            <div class="footer-section">
              <h3>About</h3>
              <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Menu</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h3>Company</h3>
              <ul>
                <li><a href="">why 2rism</a></li>
                <li><a href="">Partner with us</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Blog</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h3>Support</h3>
              <ul>
                <li><a href="">Account</a></li>
                <li><a href="">Support Center</a></li>
                <li><a href="">Feedback</a></li>
                <li><a href="">Contact Us</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h3>Subscribe on our destination review <br> newsletters</h3>
              <form>
                <div class="form-section">
                  <img src="/Imgs/icons/messagefooter.png" alt="">
                  <label for="email">  Your Email
                    <input type="email" id="email" name="email" placeholder="exp - abc@gmail.com ">
                  </label>
                </div>
                <button type="submit"><img src="/Imgs/icons/arrowleft.png" alt=""></button>
              </form>
            </div>
          </div>
        </div>
      </footer>
      </body>
      </html>
      <style>
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Hiển thị 3 cột sản phẩm */
            grid-gap: 20px; /* Khoảng cách giữa các sản phẩm */
        }
    
        .product-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    
        .product-image {
            width: 300px;
            height: 300px; /* Điều chỉnh kích thước cố định của hình ảnh */
            object-fit: cover;
            object-position: center; /* Cắt hình ảnh theo tỷ lệ 1:1 */
        }
         .bi-cart {
        color: red; /* Đổi màu thành đỏ */
        width: 24px; /* Đặt chiều rộng là 24px */
        height: 24px; /* Đặt chiều cao là 24px */
    }
    </style>