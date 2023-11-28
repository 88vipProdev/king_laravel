<div>
    
        <form action="{{route("user.order", $cartItem->id)}}" method="post">
                @csrf
            <label for="fullname">FullName</label>
            <input type="text" name="fullname" id="" placeholder="fullname">
            <div>
                @error("fullname")
                        <div>{{@message}}</div>
                @enderror
            </div>
                    
            
    
            <label for="address">address</label>
            <input type="text" name="address" id="" placeholder="address">
            <div>
                @error('address')
                    <div>{{@message}}</div>
                @enderror
            </div>
            <label for="phone">phone</label>
            <input type="text" name="sdt" id="" placeholder="phone">
            <div>
                @error("phone")
                        <div>{{@message}}</div>
                @enderror
            </div>
            <label for="nametour">nametour</label>
            <input type="text" name="nametour" id="" placeholder="nametour">
            <div>
                @error("nametour")
                        <div>{{@message}}</div>
                @enderror
            </div>
            <label for="totalmoney">totalmoney</label>
            <input type="text" name="total_money" id="" placeholder="totalmoney">
            <div>
                @error("total_money")
                        <div>{{@message}}</div>                        
                @enderror
            </div>
            <label for="address">status</label>
            <input type="text" name="status" id="" placeholder="status">
            <div>
                @error("satust")
                        <div>{{@message}}</div>
                @enderror
            </div>

            <div><button type="submit">thanh toán</button></div>
        </form>
    
    </div>
    