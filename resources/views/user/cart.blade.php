
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>image</th>
                <th>price</th>
                <th>Số lượng</th>
                <th>xóa</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($show as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td> <img src="{{asset('storage/'.$cartItem->image)}} " width =100px height =100px ></td>
                    <td>{{ $cartItem->product->price }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>
                       <form action="{{route("user.remove",$cartItem->id)}}" method="post">
                            @method("delete")
                            @csrf
                            <button type = "submit">delete</button>
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>
  