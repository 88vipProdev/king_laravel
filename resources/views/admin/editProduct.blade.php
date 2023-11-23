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
            <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
           
            
                <label for="name">Tên sản phẩm</label><br>
                <input type="text" name="name" value="{{ $product->name }}"><br>
            
                <label for="image">Ảnh</label><br>
                <img src="{{ asset('uploads/.$product') }}" alt="image" sizes="full" srcset=""><br>
                <input type="file" name="image" value="{{ $product->image }}"><br>
            
                <label for="location">Vị trí</label><br>
                <input type="text" name="location" value="{{ $product->location }}"><br>
            
                <label for="price">Giá</label><br>
                <input type="text" name="price" value="{{ $product->price }}"><br>
            
                <label for="categories_id">Category</label><br>
                <select name="categories_id" id="categories_id" required><br>
                    <option value="">Select category</option><br>
                    @foreach ($category as $id=>$namecategory)
                        <option value="{{$id}}">{{ $namecategory }}</option><br>
                    @endforeach
                </select>
                @error('categories_id')
                    <div>{{ $message }}</div>
                @enderror
            
                <button type="submit">Cập nhật</button><br>
            </form>
        </div>
</body>
</html>