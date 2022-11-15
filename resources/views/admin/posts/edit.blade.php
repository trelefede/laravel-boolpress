@extends('layouts.dashboard')

@section('content')
    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" required minlength="2" maxlength="255"
                value="{{ old('title', $post->title) }}">
        </div>
        <div>
            <label for="content">Contenuto:</label>
            <textarea name="content" cols="30" rows="10" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <div>
            <input type="submit" value="Aggiorna">
        </div>
    </form>
@endsection
