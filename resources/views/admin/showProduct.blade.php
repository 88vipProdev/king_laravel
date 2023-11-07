<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Tour</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td>location</td>
                    <td>image</td>
                    <td>price</td>
                </tr>
            </thead>
            <tbody>
               @foreach ($listProduct as $listItem )
                   <tr>
                        <td>{{$listItem->name}}</td>
                        <td>{{$listItem->location}}</td>
                        <td><img src="{{ asset('uploads/.$listItem') }}" alt="image" sizes="full" srcset=""></td>
                       
                        <td>{{$listItem->price}}</td>
                   </tr>
               @endforeach
            </tbody>
        </table>
</body>
</html>