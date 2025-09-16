@extends('shared.admin.app')
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>user name</th>
                <th>user Email</th>
                <th>Count orders</th>
                <th>Show orders</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersOrders as $usersOrder)
            <tr style="margin-top: 20px;">
                <td>{{ $usersOrder->name }}</td>
                <td>{{ $usersOrder->email}}</td>
                <td>{{ $usersOrder->total_orders}}</td>
                <td>
                    <a href="{{ route('admin.orders.show',$usersOrder->id ) }}">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
