@extends('layouts.admin')
@section('content')
    <h1>Category</h1>
    <p>The category name is: {{ $category->name }}</p>
    @foreach ($category->posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
@endsection
