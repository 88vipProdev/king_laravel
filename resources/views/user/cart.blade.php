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
    <h1>giỏ hàng</h1>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Xóa</th>
            <th scope="col">Đặt hàng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($show as $cartItem)
            <tr>
                <td>{{ $cartItem->product->name }}</td>
                <td><img src="{{asset('storage/'.$cartItem->image)}}" width="100px" height="100px"></td>
                <td>{{ $cartItem->product->price }}</td>
                <td>{{ $cartItem->quantity }}</td>
                <td>
                    <form action="{{ route('user.remove', $cartItem->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('user.store', $cartItem->id) }}" class="btn btn-primary">Đặt hàng</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
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

  