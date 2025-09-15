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
                <td><form action="{{ route('admin.categories.destroy',$category['id']) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.categories.create') }}" class="update" >add</a>
</div>
@endsection
