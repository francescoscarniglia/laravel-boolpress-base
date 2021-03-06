@extends('layouts.main')
@section ('main-content')

<h2>Detail product: {{ $product->name}}</h2>
<h4>Product id: {{ $product->id}}</h4>

<p>
    Description: {{ $product->description }}
</p>

<p>
    Price: {{ $product->price}}
</p>

<h3>Reviews</h3>

@foreach ($product->reviews as $review)
    <h4> {{ $review->title }}  </h4>
    <p> {{ $review->body }} </p>
    @if (!$loop->last)
       <hr>
    @endif

@endforeach

@endsection
