@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    {{-- categoria --}}
    @if ($post->category)
        <p>Categoria:{{ $post->category->name }}</p>
    @else
        <p>Nessuna categoria</p>
    @endif

    <a href="{{ route('admin.posts.edit', $post->id) }}" class="mt-3">Modifica</a>
    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina Post" onclick="confirm('Confermi di voler eliminare il post?')">
    </form>
@endsection
