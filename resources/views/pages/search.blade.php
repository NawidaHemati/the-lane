@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <section class="search-page">
        <br><br>
        @if(isset($results))
            <div class="search-results">
                @if(count($results) > 0)
                    @foreach($results as $product)
                        <div class="search-item">
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                                <p>{{ $product->name }}</p>
                                <p>${{ number_format($product->price, 2) }}</p>
                                <button type="submit" class="add-to-cart-btn">Add to Shopping Bag</button>
                            </form>
                        </div>
                    @endforeach
                @else
                    <p class="no-results">No results found.</p>
                @endif
            </div>
        @endif
    </section>
@endsection

