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
                <form action="{{route("admin.create")}}" method="post">
                     @csrf 
                        <div>
                            <label for="namecategory">namecategory</label>
                            <input type="text" name="namecategory" id="" placeholder="namecategory">
                      
                            @error("namecategory")
                                <div>{{@message}}</div>
                            @enderror
                        </div>
                    <button type = "submit">create</button>
                </form>
             
            </div>
</body>
</html>