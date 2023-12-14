<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <!-- Thêm các tệp CSS của Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Admin Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("admin.createProduct")}}">addProducts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <h1>update</h1>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
      
              <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
              </div>
      
              <div class="mb-3">
                <label for="image" class="form-label">Ảnh</label><br>
                <img src="{{ asset('storage/'.$product->image) }}" alt="image" class="img-fluid mb-3" style="max-height: 200px;">
                <input type="file" name="image" class="form-control-file">
              </div>
      
              <div class="mb-3">
                <label for="location" class="form-label">Vị trí</label>
                <input type="text" name="location" value="{{ $product->location }}" class="form-control">
              </div>
      
              <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control">
              </div>
      
              <div class="mb-3">
                <label for="categories_id" class="form-label">Category</label>
                <select name="categories_id" id="categories_id" class="form-select" required>
                  <option value="">Select category</option>
                  @foreach ($category as $id => $namecategory)
                    <option value="{{ $id }}" {{ $id == $product->categories_id ? 'selected' : '' }}>
                      {{ $namecategory }}
                    </option>
                  @endforeach
                </select>
                @error('categories_id')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
      
              <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
          </div>
        </div>
      </div>

      <footer>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/Imgs/Logo/logoblack.svg" alt="">
                        <p>We always make our customers happy by providing as many choices as possible</p>
                        <div class="footer-social-icons">
                            <a href="#"><img src="/Imgs/icons/facebook.png" alt=""></a>
                            <a href="#"><img src="/Imgs/icons/twitter.png" alt=""></a>
                            <a href="#"><img src="/Imgs/icons/instagram.png" alt=""></a>
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
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="exp - abc@gmail.com">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><img src="/Imgs/icons/arrowleft.png" alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    </html>