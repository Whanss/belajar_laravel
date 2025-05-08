@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    @if($post->gambar)
        <img src="{{ asset('storage/' . $post->gambar) }}" alt="Gambar" width="300">
    @endif
    <div class="mt-3">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure want to delete this post?')">Delete</button>
        </form>
    </div>
</div>
@endsection
