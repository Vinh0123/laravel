<!DOCTYPE html>				
	<html lang="vi">				
	<head>				
	<meta charset="UTF-8">				
	<meta name="viewport" content="width=device-width, initial-scale=1.0">				
	<title>Danh sách sản phẩm</title>				
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">				
	</head>				
	<body>				
	<div class="container mt-5">				
	<h2>Danh sách sản phẩm</h2>				
	<a href="{{ route('products.create') }}" class="btn btn-success mb-3">Thêm sản phẩm</a>				
	@if(session('success'))				
	<div class="alert alert-success">{{ session('success') }}</div>				
	@endif				
	<table class="table table-bordered">				
	<thead>				
	<tr>				
	<th>ID</th>				
	<th>Tên</th>				
	<th>Mô tả</th>				
	<th>Giá</th>				
	<th>Số lượng</th>				
	<th>Hành động</th>				
	</tr>				
	</thead>				
	<tbody>				
	@foreach($products as $product)				
	<tr>				
	<td>{{ $product['id'] }}</td>				
	<td>{{ $product['name'] }}</td>				
	<td>{{ $product['description'] }}</td>				
	<td>{{ number_format($product['price'], 2) }} $</td>				
	<td>{{ $product['quantity'] }}</td>				
	<td>				
	<a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Sửa</a>				
	<form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">				
	@csrf				
	@method('DELETE')				
	<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>				
	</form>				
	</td>				
	</tr>				
	@endforeach				
	</tbody>				
	</table>				
	</div>				
	</body>				
	</html>				
	View: Form Thêm Sản Phẩm (resources/views/products/create.blade.php)				
					
					
	@extends('layouts.app')				
	@section('content')				
	<div class="container mt-5">				
	<h2>Thêm sản phẩm</h2>				
	<form action="{{ route('products.store') }}" method="POST">				
	@csrf				
	<input type="text" name="name" placeholder="Tên sản phẩm" required class="form-control mb-3">				
	<textarea name="description" placeholder="Mô tả" class="form-control mb-3"></textarea>				
	<input type="number" name="price" placeholder="Giá" required class="form-control mb-3">				
	<input type="number" name="quantity" placeholder="Số lượng" required class="form-control mb-3">				
	<button type="submit" class="btn btn-success">Lưu</button>				
	</form>				
	</div>				
	@endsection				
        View: Form Chỉnh Sửa Sản Phẩm (resources/views/products/edit.blade.php)				
                        
                        
        @extends('layouts.app')				
        @section('content')				
        <div class="container mt-5">				
        <h2>Chỉnh sửa sản phẩm</h2>				
        <form action="{{ route('products.update', $product['id']) }}" method="POST">				
        @csrf				
        @method('PUT')				
        <input type="text" name="name" value="{{ $product['name'] }}" required class="form-control mb-3">				
        <textarea name="description" class="form-control mb-3">{{ $product['description'] }}</textarea>				
        <input type="number" name="price" value="{{ $product['price'] }}" required class="form-control mb-3">				
        <input type="number" name="quantity" value="{{ $product['quantity'] }}" required class="form-control mb-3">				
        <button type="submit" class="btn btn-primary">Cập nhật</button>				
        </form>				
        </div>				
	@endsection				