@extends('layouts.base')

@section('content')
    <div class="container-sm p-3">
        <h1 class="mb-4">THÊM SẢN PHẨM</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">TÊN:</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" id="slug" class="form-control form-control-sm" value="{{ old('slug') }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="short_description">Mô Tả ngắn:</label>
                        <input type="text" name="short_description" id="short_description" class="form-control form-control-sm" value="{{ old('short_description') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Mô Tả :</label>
                        <textarea name="description" id="description" class="form-control form-control-sm">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="regular_price">Giá:</label>
                        <input type="text" name="regular_price" id="regular_price" class="form-control form-control-sm" value="{{ old('regular_price') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sale_price">Giá Sale:</label>
                        <input type="text" name="sale_price" id="sale_price" class="form-control form-control-sm" value="{{ old('sale_price') }}">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="SKU">SKU:</label>
                        <input type="text" name="SKU" id="SKU" class="form-control form-control-sm" value="{{ old('SKU') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="stock_status">Tình trạng tồn kho:</label>
                        <select name="stock_status" id="stock_status" class="form-control form-control-sm">
                            <option value="instock" {{ old('stock_status') == 'instock' ? 'selected' : '' }}>Còn Hàng</option>
                            <option value="outstock" {{ old('stock_status') == 'outstock' ? 'selected' : '' }}>Hết Hàng</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quantity">Số Lượng:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control form-control-sm" value="{{ old('quantity') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Ảnh:</label>
                        <input type="file" name="image" id="image" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="images">Hình ảnh bổ sung:</label>
                        <input type="file" name="images[]" id="images" class="form-control form-control-sm" multiple>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">Danh Mục:</label>
                        <select name="category_id" id="category_id" class="form-control form-control-sm">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="brand_id">Thương Hiệu:</label>
                        <select name="brand_id" id="brand_id" class="form-control form-control-sm">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Hoàn Thành</button>
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
