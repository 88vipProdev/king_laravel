<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <h3>Thêm chi tiết sản phẩm</h3>
            
            <div>
                <form action="{{route("admin.createDetail")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="namedetail">namedetail</label><br>
                        <input type="text" name="namedetail" id="">

                        @error("namedetail")
                            <div>{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="review">review</label><br>
                        <input type="text" name="review"><br>
                    </div>
                    <div>
                        <label for="image">Image</label><br>
                        <input type="file" name="image" >
                    </div>
                    <div>
                        <label for="location">location</label><br>
                        <input type="text" name="location" id="">
                    </div>
                    <div>
                        <label for="price">price</label><br>
                        <input type="text" name="price" id="">
                    </div>
                    <div>
                        <label for="productId">ProductID</label><br>
                        <select name="productId" id="productId" required>
                            <option value="">ProductId</option>
                            @foreach ($detail as $id=>$name)
                                <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                        </select>
                        @error('categories_id')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit">add</button>
                    </div>


                </form type="submit">
            </div>
</body>
</html>