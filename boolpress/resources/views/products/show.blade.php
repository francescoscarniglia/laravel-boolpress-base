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


@endsection
