@extends('layouts.base')

@section('content')
    <div class="container-sm p-3">
        <h1 class="mb-4">Sửa Sản Phẩm</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Tên:</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" id="slug" class="form-control form-control-sm" value="{{ $product->slug }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="short_description">Mô Tả Ngắn:</label>
                        <input type="text" name="short_description" id="short_description" class="form-control form-control-sm" value="{{ $product->short_description }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Mô Tả:</label>
                        <textarea name="description" id="description" class="form-control form-control-sm">{{ $product->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="regular_price">Giá:</label>
                        <input type="text" name="regular_price" id="regular_price" class="form-control form-control-sm" value="{{ $product->regular_price }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sale_price">Giá Sale:</label>
                        <input type="text" name="sale_price" id="sale_price" class="form-control form-control-sm" value="{{ $product->sale_price }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="SKU">SKU:</label>
                        <input type="text" name="SKU" id="SKU" class="form-control form-control-sm" value="{{ $product->SKU }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="stock_status">Tình trạng tồn kho:</label>
                        <select name="stock_status" id="stock_status" class="form-control form-control-sm">
                            <option value="instock" {{ $product->stock_status == 'instock' ? 'selected' : '' }}>Còn Hàng</option>
                            <option value="outstock" {{ $product->stock_status == 'outstock' ? 'selected' : '' }}>Hết Hàng</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quantity">Số Lượng:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control form-control-sm" value="{{ $product->quantity }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Ảnh:</label>
                        <input type="file" name="image" id="image" class="form-control form-control-sm" value="{{ $product->image }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="images">Ảnh Bổ Sung:</label>
                        <input type="file" name="images" id="images" class="form-control form-control-sm" value="{{ $product->images }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">Danh Mục:</label>
                        <input type="text" name="category_id" id="category_id" class="form-control form-control-sm" value="{{ $product->category_id }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="brand_id">Thương hiệu:</label>
                        <input type="text" name="brand_id" id="brand_id" class="form-control form-control-sm" value="{{ $product->brand_id }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Cập Nhật</button>
        </form>
    </div>
@endsection

@push('styles')
    <style>
        .container-sm {
            max-width: 600px;
            margin: auto;
            padding-left: 1cm;
            padding-right: 1cm;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #86b7fe;
        }
        .btn-sm {
            padding: 0.5rem 1rem;
        }
    </style>
@endpush
