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
            <tr style="margin-top: 20px;">
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <!-- <td class="warning"></td> -->
                <td>
                    <a class="show" href="{{ route('admin.products.show', $product['id']) }}">Show</a>
                    <a class="update" href="{{ route('admin.products.edit', $product['id']) }}">Edit</a>
                    <form action="{{ route('admin.products.destroy',$product['id']) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button style="display:inline-block;">
                    <a class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">Show All</a>
</div>
@endsection
