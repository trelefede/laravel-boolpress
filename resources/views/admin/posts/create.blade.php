@extends('layouts.dashboard')

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

    </form>
@endsection
