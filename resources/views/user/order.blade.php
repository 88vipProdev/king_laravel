<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</head>
<body>
    <header>
   
        <nav class="navbar navbar-expand-lg bg-body">
          <div class="container-fluid">
            <button
              data-mdb-collapse-init
              class="navbar-toggler"
              type="button"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="{{route("user.showTour")}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 400px;
          "
        >
         
      </header>

      <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-first">
                    <form action="{{ route('user.orderTour', $cartItem->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                            @error('fullname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" required>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="sdt" class="form-control" required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @foreach ($cartItem->carts as $order)
                            <label for="cart_id" class="form-label">ID</label>
                            <input type="text" name="cart_id" value="{{ $order->id }}" class="form-control" required><br>
                            <label for="nametour" class="form-label">Tour Name</label>
                            <input type="text" name="nametour" value="{{ $order->name }}" class="form-control" required><br>
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" value="{{ $order->price }}" class="form-control" required><br>
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" name="quantity" value="{{ $order->quantity }}" class="form-control" required><br>
                            <label for="total_money" class="form-label">Total Money</label>
                            <input type="text" name="total_money" value="{{ $order->quantity * $order->price }}" class="form-control" required><br>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Order</button>
                    </form>
                </div>
                <div class="col-md-6">
                    @foreach ($cartItem->carts as $order)
                        <img src="{{ asset('storage/'.$order->image) }}" class="img-thumbnail img-fluid" alt="Tour Image"><br>
                    @endforeach
                </div>
            </div>
        </div>
      </main>

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/Imgs/Logo/logoblack.svg" alt="Logo">
                    <p>We always make our customers happy by providing as many choices as possible</p>
                    <div class="footer-social-icons">
                        <img src="/Imgs/icons/facebook.png" alt="Facebook">
                        <img src="/Imgs/icons/twitter.png" alt="Twitter">
                        <img src="/Imgs/icons/instagram.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-md-2">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">Why 2rism</a></li>
                        <li><a href="#">Partner with us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Subscribe to our destination review newsletters</h3>
                    <form>
                        <div class="form-section">
                            <img src="/Imgs/icons/messagefooter.png" alt="Email Icon">
                            <label for="email">Your Email
                                <input type="email" id="email" name="email" placeholder="e.g. abc@gmail.com">
                            </label>
                        </div>
                        <button type="submit"><img src="/Imgs/icons/arrowleft.png" alt="Submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>