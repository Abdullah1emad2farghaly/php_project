@extends('shared.admin.app')
@section('content')
<table style="width: 100%;">
    <tbody>

        @foreach($products as $product)
        <tr>
            <th>Name:</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <th>Category:</th>
            <td>{{ $product->category_id }}</td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th>Description:</th>
            <td>{{ $product->description }}</td>
        </tr>
        <tr>
            <td colspan="2" style="border-bottom: 1px solid red; font-weight:600; color:red;">end order</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
