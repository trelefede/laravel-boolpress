@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <a href="{{ route('admin.posts.create') }}" class="mb-4">Nuovo Post</a>

        @foreach ($posts as $post)
            <div class="col-12">
                <a href="{{ route('admin.posts.show', $post->id) }}"> {{ $post->title }} </a>
            </div>
        @endforeach
    </div>
@endsection
