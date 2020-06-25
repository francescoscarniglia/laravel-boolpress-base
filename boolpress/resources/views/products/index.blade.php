@extends('layouts.main')
@section ('main-content')
    <h2>Shop</h2>


    {{-- @dump($products) --}}
    @foreach ($products as $item)
    <div class="products mt-4 mb-4">

        <h2>{{ $item->name }}</h2>
        <h4>{{ $item->price }}</h4>
        <p>
            {{ $item->description }}
        </p>

        <a class="btn btn-info" href="{{ route('products.show', $item->id ) }}">Show</a>

    @if(!$loop->last)
        <hr>
    @endif

    </div> {{-- products --}}

    @endforeach



@endsection
