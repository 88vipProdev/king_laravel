
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>image</th>
                <th>price</th>
                <th>Số lượng</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($show as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->product->image }}</td>
                    <td>{{ $cartItem->product->price }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  