@extends('shared.admin.app');
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Shipping Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr style="margin-top: 20px;">
                <td>{{ $order['id'] }}</td>
                <td>{{ $order['user_id'] }}</td>
                <td>{{ $order['total_price'] }}</td>
                <td>{{ $order['status'] }}</td>
                <td>{{ $order['payment_method'] }}</td>
                <td>{{ $order['shipping_address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">Show All</a>
</div>
@endsection
