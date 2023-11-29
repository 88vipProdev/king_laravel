<div>
    
        <form action="{{route("user.orderTour", ['id' => $cartItem->id])}}" method="post">
                @csrf
            <div>
                @foreach ($cartItem->carts as $order)

                     <td> <img src="{{asset('storage/'.$order->image)}} " width =100px height =100px ></td><br>
                @endforeach
                <div>
                    <label for="fullname">fullname</label><br>
                    <input type="text" name="fullname"><br>
                    @error("fullname")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="address">address</label><br>
                    <input type="text" name="fullname"><br>
                    @error("address")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="phone">phone</label><br>
                    <input type="text" name="fhone"><br>
                    @error("phone")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                @foreach ($cartItem->carts as $order )
                <label for="cart_id">id</label><br>
                <input type="text" name="cart_id" value="{{$order->id}}" id=""><br>
                <label for="nametour">nametour</label><br>
                <input type="text" name="name" value="{{$order->name}}"><br>
                <label for="price">price</label><br>
                <input type="text" name="price" value="{{$order->price}}" , id = ""><br>
                <label for="quantyti">số lượng</label><br>
                <input type="text" name="quantity" value="{{$order->quantity}}"><br>
                <label for="total_money">thành tiền</label><br>
               <input type="text" name="total_money" value="{{$order->quantity*$order->price}}"><br>
               
                @endforeach
                <label for="status">status</label><br>
                <input type="text" name="status" id=""><br>
                <button type="submit">đặt hàng</button>
            </div>
        </form>
    
    </div>
    {{-- "cart_id" =>$id,
    "fullname"=>$request->input("fullname"),
    "address"=>$request->input("address"),
    "sdt"=>$request->input("sdt"),
    "nametour"=>$request->input("nametour"),
    "price"=>$request->input("price"),
    "quantity"=>$request->input("quantity"),
    "total_many"=>$request->input("total_maney"),
    "status"=>$request->input("status"), --}}