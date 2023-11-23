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
                    <td></td>
                </tr>
            </thead>
            <tbody>
               @foreach ($listProduct as $listItem )
                   <tr>
                        {{-- <td>{{$listItem->id}}</td> --}}
                        <td>{{$listItem->name}}</td>
                        <td>{{$listItem->location}}</td>
                        <td><img  src="{{ asset('storage/uploads'.$listItem->image) }}"  alt="image" sizes="full" srcset=""></td>
                                {{-- @php
                                    dd($listItem->image);
                                @endphp --}}
                        <td>{{$listItem->price}}</td>
                        <td><a href="{{ route('admin.edit', ['id' => $listItem->id]) }}">edit</a></td>
                        <td>
                            
                            <form action="{{ route('admin.deleteTour', ['id' => $listItem->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>

                        <td>

                           
                        </td>
                   </tr>

               @endforeach
            </tbody>
        </table>
</body>
</html>