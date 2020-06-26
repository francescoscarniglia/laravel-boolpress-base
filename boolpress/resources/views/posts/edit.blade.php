@extends('layouts.main')
@section ('main-content')
    <h2 class="mb-4">Edit post</h2>

    @if ($errors->any())
    <div class="alert alert-info p-0">
        <ul class="list-group list-group-flush">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-info">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route ('posts.update', $post->id) }}" method="POST">

    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">

    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" name="body" id="body" rows="3">{{ old('body', $post->body) }}</textarea>
    </div>

    @foreach ($tags as $tag)
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}"
        @if ($post->tags->contains($tag->id)) checked @endif>
        <label for="tag-{{ $loop->iteration }}"> {{ $tag->name}}</label>
        </div>
    @endforeach

    <input class="btn btn-info mt-4 mb-4" type="submit" value="Update Post">


</form>

@endsection
