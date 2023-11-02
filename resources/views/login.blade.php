<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                <h1>trang login</h1>

        <div>
            <form action ="{{route("login")}}" method="POST">
                @csrf
                <div>
                    <lable for= "email">email</lable><br>
                    <input type="text" name="email" id = "" placeholder="username"><br>
                    @error("username")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <lable for="password">password</lable><br>
                    <input type="password" name="password" id = "" placeholder="password"><br>
                    @error("password")
                        <div>{{$message}}</div>
                    @enderror
                </div>

                <input type = "submit" value="login">
                
            </form value="submit">
        </div>
</body>
</html>