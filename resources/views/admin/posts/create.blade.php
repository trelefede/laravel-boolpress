@extends('layouts.dashboard')

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        {{-- titolo --}}
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" required minlength="2" maxlength="255" value="{{ old('title', '') }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        {{-- categorie --}}
        <div>
            <label for="category_id">Categoria:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id', '') ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- contenuto --}}
        <div>
            <label for="content">Contenuto:</label>
            <textarea name="content" cols="30" rows="10" required>{{ old('content', '') }}</textarea>
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
                    {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
            @endforeach
            @error('tags')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Posta">
        </div>
    </form>
@endsection
