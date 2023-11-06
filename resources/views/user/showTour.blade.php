<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
            <h1>ListProduct</h1>

            <div>
                @foreach ($datalist as $listItem )
                    <h3>{{$listItem ->name}}</h3>
                    <p><img src="{{ asset('/uploads/.$listItem->image') }}" alt="" srcset=""></p>
                    <p>{{$listItem->location}}</p>
                    <p>{{$listItem->price}}</p>


                @endforeach
            </div>
</body>
</html>