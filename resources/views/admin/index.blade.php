@extends('layouts.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-grid gap-2">
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-lg">Category</a>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Product</a>
            </div>
        </div>
    </div>
</div>
@endsection
