@extends('layouts.main')
@section ('main-content')
    <h2 class="mb-4">Create new post</h2>

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

    <input class="btn btn-info mt-4 mb-4" type="submit" value="Create Post">

</form>

@endsection
