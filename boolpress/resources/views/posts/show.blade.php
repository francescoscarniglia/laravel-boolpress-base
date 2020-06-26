@extends('layouts.main')
@section ('main-content')
    <h2 class="mb-2">{{ $post->title }}</h2>
    <a class="btn btn-sm btn-info" href="{{ route('posts.edit', $post->id) }}">Edit post</a>

<form class="d-inline" action=" {{ route('posts.destroy', $post->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
</form>
    <p class="lead mt-2">
        {{$post->body}}
    </p>

    <section class="wrap-tags mt-2 mb-2">
        <h5>Tags</h5>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-info">{{ $tag->name }} </span>
        @empty
            <p>No tag</p>
        @endforelse
    </section>
@endsection
