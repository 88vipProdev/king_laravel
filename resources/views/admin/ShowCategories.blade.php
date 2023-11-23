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
                                                        <h3>Hiển thị danh mục </h3>
                <table>
                    <thead>
                        <tr>
                            <td>stt</td>
                            <td>namecategory</td>
                            <td>xóa</>

                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($listCategories as $listItem )
                           <tr>
                                <td>{{$listItem->id}}</td>
                                <td>{{$listItem->namecategory}}</td>
                                <td>
                                    <form action="{{ route('admin.deleteCategories', ['id' => $listItem->id]) }}" method="post">
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