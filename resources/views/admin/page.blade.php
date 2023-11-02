<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                <h1>createNew</h1>

                <div>
                    <form action="{{route('admin.NewPages')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div>
                            <lable for = "title">title</lable><br>
                            <input type="text" name="title" id="" placeholder="title"><br>
                            @error('title')
                                <div>{{$message}}</div>
                            @enderror
                        </div>

                        <div>
                            <lable for="content">content</lable><br>
                            <textarea id = "" name="content"></textarea>
                            @error('content')
                                <div>{{$message}}</div>
                            @enderror
                        </div>

                        <div>
                            <lable for = "image">image</lable><br>
                            <input type="file" class="" name ="image"><br>
                            @error('file')
                                <div>{{$message}}</div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit">create</button>
                        </div>

                    </form>
                </div>
</body>
</html>