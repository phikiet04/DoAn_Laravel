<!-- resources/views/categories/index.blade.php -->

@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>Danh Mục</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Thêm Danh Mục</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Xem</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Sửa</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
