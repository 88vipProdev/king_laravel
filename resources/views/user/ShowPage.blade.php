<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>đây là trang chủ</h1>

        @foreach ($show as $item )
            <h3>{{$item -> title}}</h3>
            <p>{{$item ->content}}</p>
            <img src="{{ asset("uploads/.$item->image")}}" alt="image" width="251px">
         
        @endforeach
        
</body>
</html>