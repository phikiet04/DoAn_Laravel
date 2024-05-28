<!-- resources/views/categories/show.blade.php -->

@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>Category Details</h2>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Slug:</strong> {{ $category->slug }}</p>
        @if ($category->image)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="max-width: 300px;">
        @endif
    </div>
@endsection
