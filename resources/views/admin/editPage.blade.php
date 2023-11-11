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
                  
                  <h3>sửa nội dung</h3>
                  <form action="{{route("admin.EditPage",$dataPage->id)}}" method="post" enctype = "multipart/form-data">
                       @csrf
                       
                       <div>
                            <label for="title">title</label><br>
                            <input type="text" name = "title" ,value = "{{$dataPage->title}}" >
                       </div>
                       <div>
                            <label for="content">content</label><br>
                            <input type="text" name="content" id="content" value="{{$dataPage->content}}">
                       </div>
                       <div>
                            <label for="image">Image</label><br>
                            <img src="{{ asset("uploads/.$dataPage->image") }}" alt="image" width="251px"><br>
                            <input type="file" name="image" value="{{$dataPage->image}}"><br>
                       </div>
                       <button type = "submit">cập nhập</button>
                  </form>

            </div>
</body>
</html>     