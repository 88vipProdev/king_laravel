<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>stt</td><br>
                            <td>name</td><br>
                            <td>review</td><br>
                            <td>image</td><br>
                            <td>locaion</td><br>
                            <td>price</td><br>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detaildata as $listdata)
                                <tr>
                                    <td>{{$listdata->id}}</td>
                                    <td>{{$listdata->namedetail}}</td>
                                    <td>{{$listdata->review}}</td>
                                    <td><img src="{{ asset("uploads/.$listdata->image") }}" alt="image" width="251px"></td>
                                    <td>{{$listdata->location}}</td>
                                    <td>{{$listdata->price}}</td>
                                    <td><a href="{{ route('admin.update', ['id' => $listdata->id]) }}">edit</a></td>update</a></td>
                                    <td>
                                        <form action="{{ route('admin.delete', ['id' => $listdata->id]) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</body>
</html>