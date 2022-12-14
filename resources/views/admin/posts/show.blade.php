@extends('layouts.dashboard')

@section('content')
    <h1> {{ $post->title }} </h1>
    <p> {{ $post->content }} </p>

    <div class="mt-5">
        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit Post</a>
    </div>

    <div class="mt-2">
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input onclick="confirm('Are you sure?')" type="submit" value="Delete Post">
        </form>
    </div>

    <div>
        <a href="{{ route('admin.posts.index') }}">Back to Posts</a>
    </div>
@endsection
