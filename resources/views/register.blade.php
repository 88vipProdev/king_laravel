{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelagency</title>
</head>
<body>
        <div>
            <form action="{{route('register')}}" method="POST">
                @csrf
                
                    <lable for="username">username</lable><br>
                    <input text="username"  name="username" id = ""  placeholder="username"><br>
                    @error("username")
                        <div>{{$message}}</div>
                    @enderror
                    <lable for = "email">email</lable><br>
                    <input type="text" name= "email" id ="" placeholder="email"><br>
                    @error("email")
                        <div>{{$message}}</div>
                    @enderror
                    <lable for = "password">password</lable><br>
                    <input type="password"  name = "password"  id = "" placeholder="password"><br>
                    @error("password")
                        <div>{{$message}}</div>
                    @enderror
            
                    <label for = "confirm_password"> confirm password</label><br>
                    <input type="password" name = "password_confirmation" id = "" placeholder="password_confirmation"><br>
                    @error("password_confirmation")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <input type="submit" value="Register">
            </form type="submit">

        </div>
</body>
</html> --}}


<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<form action ="{{route("register")}}" method="POST">
@csrf
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in</h3>
              <div class="form-outline mb-4">
                <label class="form-label" for="typeEmailX-2">username</label>
                <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
               
                @error("username")
                     <div>{{$message}}</div>
                @enderror
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="typeEmailX-2">Email</label>
                <input type="text" name="email" id="typeEmailX-2" class="form-control form-control-lg" />
               
                @error("email")
                     <div>{{$message}}</div>
                @enderror
              </div>
  
              <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">Password</label>
                <input type="text" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
               
                @error("password")
                <div>{{$message}}</div>
                @enderror
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">confirm Password</label>
                <input type="password" name = "password_confirmation" id="typePasswordX-2" class="form-control form-control-lg" />
               
                @error("password_confirmation")
                        <div>{{$message}}</div>
                @enderror
              </div>
  
              <!-- Checkbox -->
             
  
              <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
  
              <hr class="my-4">
  
             
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form value="submit">
</div>
</div>


       

