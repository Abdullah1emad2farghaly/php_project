@extends('shared.admin.app');
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr style="margin-top: 20px;">
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['address'] }}</td>
                <td>{{ $user['phone'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">Show All</a>
</div>
@endsection
