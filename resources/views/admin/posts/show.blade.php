@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h6>Category: {{ $post->category ? $post->category->name : 'Senza categoria' }}
        </td>
    </h6>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <p>{!! $post->body !!}</p>
@endsection
