@extends('layouts.dashboard')

@section('content')
    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
        @csrf
        @method('PATCH')

        {{-- titolo --}}
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" required minlength="2" maxlength="255"
                value="{{ old('title', $post->title) }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        {{-- categorie --}}
        <div>
            <label for="category_id">Categoria:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- contenuto --}}
        <div>
            <label for="content">Contenuto:</label>
            <textarea name="content" cols="30" rows="10" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        {{-- tags --}}
        <div>
            <h6>Tag</h6>
            @foreach ($tags as $tag)
                <label for="tags">{{ $tag->name }}</label>
                <input type="checkbox" name="tags[]" value={{ $tag->id }}
                    {{ $post->tags->contains($tag) ? 'checked' : '' }}>
            @endforeach
            @error('tags')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Aggiorna">
        </div>
    </form>
@endsection
