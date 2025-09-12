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
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['category_id'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['description'] }}</td>
        </tr>
    </tbody>
</table>
@endsection
