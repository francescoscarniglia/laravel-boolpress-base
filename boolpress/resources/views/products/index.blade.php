@extends('layouts.main')
@section ('main-content')
    <h2>Shop</h2>


    {{-- @dump($products) --}}
    @foreach ($products as $item)
    <div class="products">

        <h2>{{ $item->name }}</h2>
        <h4>{{ $item->price }}</h4>
        <p>
            {{ $item->description }}
        </p>

        <a class="button" href="{{ route('products.show', $item->id ) }}">Show</a>


    </div> {{-- products --}}
    @endforeach



@endsection
