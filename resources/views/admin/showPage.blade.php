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
                                <td>title</td><br>
                                <td>content</td><br>
                                <td>image</td><br>
                                <td>edit</td><br>
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach ($dataList  as $item )
                                  <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->content}}</td>
                                    <td><img src="{{ asset("uploads/.$item->image") }}" alt="image" width="251px"></td>
                                    <td>
                                        <td><a href="{{ route('admin.EditNew', ['id' => $item->id]) }}">edit</a></td>
                                    </td>
                                  </tr>
                                @endforeach
                            
                        </tbody>
                </table>
            </div>
</body>
</html>