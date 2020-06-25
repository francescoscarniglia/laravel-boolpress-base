@extends('layouts.main')
@section ('main-content')
    <h2>Blog archive</h2>
    @foreach ($posts as $item)

        <article>
            <h2>
                {{ $item->title}}
            </h2>

            <h3 class=" author">
                    Author:  {{ $item->user->name }}
            </h3>

            <h4>
                Created: {{ $item->created_at}} | Last modified: {{ $item->updated_at }}
            </h4>
            <p>
                Description: {{ $item->body}}
            </p>
        <a  class="btn btn-info" href=" {{ route('posts.show', $item->slug )}}"> Read more...</a>
        </article>

        @if(!$loop->last)
            <hr>
        @endif
    @endforeach

    <h4>Navigation</h4>
    {{ $posts->links() }}

@endsection
