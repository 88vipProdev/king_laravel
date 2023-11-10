<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm tour</title>
</head>
<body>
    <h1>Thêm tour</h1>

    <div>
        <form action="{{ route('admin.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Name">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="image">Image</label><br>
                <input type="file" name="image" id="image">
                @error('image')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="location">Location</label><br>
                <input type="text" name="location" id="location" placeholder="Location">
                @error('location')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="price">Price</label><br>
                <input type="text" name="price" id="price" placeholder="Price">
                @error('price')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="categories_id">Category</label><br>
                <select name="categories_id" id="categories_id" required>
                    <option value="">Select category</option>
                    @foreach ($category as $id=>$name)
                        <option value="{{$id}}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('categories_id')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>