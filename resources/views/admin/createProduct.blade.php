<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


                <h1>Thêm tour</h1>

        <div>
            <form action="{{route('admin.product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">name</label><br>
                    <input type="text" name="name" id=" placeholder="name">
                    @error('name')
                        <div>{{@message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="image">Image</label><br>
                    <input type="file" name="image" id="">
                    @error('file')
                        <div>{{@message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="location">location</label><br>
                    <input type="text" name="location" id="" placeholder="location">
                    @error('location')
                        <div>{{@message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="price">price</label><br>
                    <input type="text" name="price" id="" placeholder="price">
                    @error('price')
                        <div>{{@message}}</div>
                    @enderror
                </div>
                <button action = 'submit'>create</button>
            </form action = "submit">
        </div>
</body>
</html>