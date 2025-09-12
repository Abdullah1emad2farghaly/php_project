@extends('shared.admin.app')
@section('content')

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
    {{ Session::get('msg'); }}
</div>
@endif

<form novalidate action="{{ route('admin.products.store') }}" method="POST" class="product-form"
    enctype="multipart/form-data">
    @csrf
    <h2>Add New Product</h2>

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Product Name :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
    </div>

    <!-- image -->
    <div class="mb-3">
        <label for="image" class="form-label">Product Image :</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <!-- Price -->
    <div class=" mb-3">
        <label for="price" class="form-label">Price :</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Enter price"
            required>
    </div>

    <!-- Quantity -->
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity :</label>
        <input type="number" class="form-control" id="quantity" name="quantity" min="1" placeholder="Enter quantity"
            required>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="form-label">Description : </label>
        <input type="text" name="description" placeholder="enter the description">
    </div>

    <!-- Category -->
    <div class="mb-3">
        <label for="category" class="form-label">Category : </label>
        <select class="form-select" id="category" name="category_id" required>
            <option value="" disabled selected>select category</option>
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
    </div>

    <!-- Submit -->
    <div style="display:flex; justify-content: center; margin-top:20px">
        <button type="submit" class="btn btn-primary w-100">Add Product</button>
    </div>
</form>
@endsection