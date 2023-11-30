<div>
    
        <form action="{{route("user.orderTour", $cartItem->id)}}" method="post">
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
                    <input type="text" name="address"><br>
                    @error("address")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="phone">phone</label><br>
                    <input type="text" name="sdt"><br>
                    @error("phone")
                        <div>{{$message}}</div>
                    @enderror
                </div>
                @foreach ($cartItem->carts as $order )
                <label for="cart_id">id</label><br>
                <input type="text" name="cart_id" value="{{$order->id}}" id=""><br>
                <label for="nametour">nametour</label><br>
                <input type="text" name="nametour" value="{{$order->name}}"><br>
                <label for="price">price</label><br>
                <input type="text" name="price" value="{{$order->price}}" , id = ""><br>
                <label for="quantyti">số lượng</label><br>
                <input type="text" name="quantity" value="{{$order->quantity}}"><br>
                <label for="total_money">thành tiền</label><br>
               <input type="text" name="total_money" value="{{$order->quantity*$order->price}}"><br>
               
                @endforeach
               
                <button type="submit">đặt hàng</button>
            </div>
        </form>
    
    </div>
 