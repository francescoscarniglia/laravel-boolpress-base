@extends('layouts.main')
@section ('main-content')
    <h2 class="mb-4">Create new post</h2>

    @if ($errors->any())
    <div class="alert alert-info p-0">
        <ul class="list-group list-group-flush">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-info">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route ('posts.store') }}" method="POST">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">

    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" name="body" id="body" rows="3">{{ old('body') }}</textarea>
    </div>

    @foreach ($tags as $tag)
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
        <label for="tag-{{ $loop->iteration }}"> {{ $tag->name}}</label>
        </div>
    @endforeach

    <input class="btn btn-info mt-4 mb-4" type="submit" value="Create Post">


</form>

@endsection
