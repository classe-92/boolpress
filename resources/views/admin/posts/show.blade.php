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
    @if ($post->tags && count($post->tags) > 0)
        <div>
            @foreach ($post->tags as $tag)
                <span class="badge rounded-pill text-bg-info">{{ $tag->name }}</span>
            @endforeach
        </div>
    @endif
@endsection
