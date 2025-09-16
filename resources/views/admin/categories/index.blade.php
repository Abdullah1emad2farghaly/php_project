@extends('shared.admin.app')
@section('content')
<div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Editing</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr style="margin-top: 20px;">
                <td>{{ $category['id'] }}</td>
                <td>{{ $category['name'] }}</td>
                <!-- <td class="warning"></td> -->
                <td>
                    <form action="{{ route('admin.categories.destroy',$category['id']) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete" onclick="return confirm('Are you sure?')"
                            style="padding: 7px 15px; background-color: rgba(255,0,0,0.7); color:white;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.categories.create') }}" class="update"
        style="padding: 7px 15px; margin-top:50px; background-color: rgba(50,255,50,1);width:fit-content;font-weight:600;color:white;">Add
        Category</a>
</div>
@endsection
