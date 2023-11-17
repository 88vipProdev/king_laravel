@if ($cartItems->isEmpty())
    <p>Giỏ hàng trống.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->product->price }}</td>
                    <td>{{ $cartItem->product->image }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>{{ $cartItem->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Tổng số lượng: {{ $cartItems->sum('quantity') }}</p>
    <p>Tổng giá trị: {{ $cartItems->sum(function ($item) {
        return $item->quantity * $item->product->price;
    }) }}</p>
@endif