<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
</head>
<body>
        <h2>edit Product</h2>

        <div>
                <form action="{{route("admin.update",['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name">name</label>
                        <input type="text"   value = "name" id="" placeholder="name...">

                    </div>
                    <div>
                        <label for="location">location</label>
                        <input type="text" name="location" id = "" placeholder="location...">
                    </div>
                    <div>
                        <label for="image">image</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div>
                        <label for="price">price</label>
                        <input type="text" name="price" id="" placeholder="price">
                    </div>
                    <button type="submit">edit</button>
                </form>
        </div>
</body>
</html>