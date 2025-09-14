@extends('shared.admin.app')
@section('content')




<form novalidate action="{{ route('admin.categories.store') }}" method="POST" class="product-form"
    enctype="multipart/form-data">
    @csrf
    <h2>Add New Category</h2>
    @if ($errors->any())
    <div class="danger" style="background-color: rgba(255,0,0,0.2); margin-top:30px; color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (Session::has('msg'))
    <div style="background-color: rgba(0,255,0,0.2); color: green;">
        {{ Session::get('msg') }}
    </div>
    @endif

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Category Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name">
    </div>

    <!-- Description
    <div class="mb-3">
        <label for="description" class="form-label">Description : </label>
        <input type="text" name="description" placeholder="enter the description">
    </div> -->
    <!-- Submit -->
    <div style="display:flex; justify-content: center; margin-top:20px">
        <button type="submit" class="btn btn-primary w-100">Add Product</button>
    </div>
</form>
@endsection
