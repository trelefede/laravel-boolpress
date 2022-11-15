@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('admin.posts.edit', $post->id) }}" class="mt-3">Modifica</a>
    <a href="{{ route('admin.posts.create') }}" class="ml-4">Nuovo Post</a>
@endsection
