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
            <h3>Update detail </h3>

            <form action="{{ route('admin.detailUpdate', $detailId->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
           
            
                <label for="name">Tên sản phẩm</label><br>
                <input type="text" name="namedetail" value="{{ $detailId->namedetail }}"><br>
            
                <label for="image">Ảnh</label><br>
                <img src="{{ asset('uploads/.$productId') }}" alt="image" sizes="full" srcset=""><br>
                <input type="file" name="image" value="{{ $detailId->image }}"><br>
                <label for="review">review</label><br>
                <input type="text" name="review" id="review" value={{$detailId->review}}><br>
                <label for="location">Vị trí</label><br>
                <input type="text" name="location" value="{{ $detailId->location }}"><br>
            
                <label for="price">Giá</label><br>
                <input type="text" name="price" value="{{ $detailId->price }}"><br>
            
                <label for="categories_id">ProductId</label><br>
                <input type="text" name="productId" value="{{ $detailId->productId }}"><br>
             
            
                <button type="submit">Cập nhật</button><br>
            </form>
        </div>
</body>
</html>