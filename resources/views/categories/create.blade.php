<!-- resources/views/categories/create.blade.php -->

@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>Thêm Danh Mục Mới</h2>
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="form-group">
                <label for="image">Ảnh:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Hoàn Thành</button>
        </form>
    </div>
@endsection
