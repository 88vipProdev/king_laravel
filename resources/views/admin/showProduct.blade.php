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
    <div class="container">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $listItem)
                    <tr>
                        <td>{{$listItem->name}}</td>
                        <td>{{$listItem->location}}</td>
                        <td>
                            <img src="{{ asset('storage/'.$listItem->image) }}" alt="Image" class="img-thumbnail" style="max-width: 100px;">
                        </td>
                        <td>{{$listItem->price}}</td>
                        <td>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Thêm các tệp JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</section>
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
</html>