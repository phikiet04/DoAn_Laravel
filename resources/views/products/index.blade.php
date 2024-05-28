@extends('layouts.base')

@section('content')
    <h1 class="mb-4">Danh Sách Sản Phẩm</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">Thêm Sản Phẩm</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TÊN</th>
                <th>SLUG</th>
                <th>GIÁ</th>
                <th>HOẠT ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">SỬA</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">XÓA</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
