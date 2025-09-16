@extends('shared.admin.app');
@section('content')
<table style="width: 100%;">
    <!-- <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>quantity</th>
            <th>description</th>
        </tr>
    </thead> -->
    <tbody>
        <tr>
            <th>ID : </th>
            <td>{{ $product['id'] }}</td>
        </tr>
        <tr>
            <th>Name : </th>
            <td>{{ $product['name'] }}</td>
        </tr>
        <tr>
            <th>Price : </th>
            <td>{{ $product['price'] }}</td>
        </tr>
        <tr>
            <th>Category : </th>
            <td>{{ $product['category_id'] }}</td>
        </tr>
        <tr>
            <th>Stock : </th>
            <td>{{ $product['stock'] }}</td>
        </tr>
        <tr>
            <th>description: </th>
            <td>{{ $product['description'] }}</td>
        </tr>
        <!-- <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['category_id'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['description'] }}</td>
        </tr> -->
    </tbody>
</table>
@endsection
