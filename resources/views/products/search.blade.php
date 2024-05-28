@extends('layouts.base')

@section('content')
<div class="container">
    <h1>Search Results for '{{ $query }}'</h1>
    @if($products->isNotEmpty())
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->short_description }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $products->appends(request()->input())->links() }}
        </div>
    @else
        <p>No products found matching your query.</p>
    @endif
</div>
@endsection
