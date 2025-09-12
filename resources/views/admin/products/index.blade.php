@extends('shared.admin.app');
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Editing</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <!-- <td class="warning"></td> -->
                <td>
                    <a href="{{ route('admin.products.show', $product['id']) }}">Show</a>
                    <a href="">Update</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">Show All</a>
</div>
@endsection
