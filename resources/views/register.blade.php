<!DOCTYPE html>
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
</html>