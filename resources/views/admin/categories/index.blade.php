@extends('shared.admin.app');
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr style="margin-top: 20px;">
                <td>{{ $category['id'] }}</td>
                <td>{{ $category['name'] }}</td>
                <!-- <td class="warning"></td> -->
                <td>
                    <a href="{{ route('admin.categories.create') }}" class="update" >add</a>
                    <a class="update">Update</a>
                    <a class="delete">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">Show All</a>
</div>
@endsection
