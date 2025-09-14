@extends('shared.admin.app');
@section('content')
<table style="width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>quantity</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
 @foreach($order->items as $item)
                <tr>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                </tr>
            @endforeach
    </tbody>
</table>
@endsection
