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
                    <img src="{{asset('storage/'.$listItem->image)}} " width =100px height =100 px " >

                   
                    <p>{{$listItem->location}}</p>
                    <p>{{$listItem->price}}</p>
                 
                    <p>
                        <form action="{{route("user.addtocart",$listItem->id)}}" method="post">
                            @method('post')
                            @csrf
                            <button type="submit">add to cart </button>
                        </form>
                    </p>

                @endforeach
            </div>
</body>
</html>