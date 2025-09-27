@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <section class="product-page">
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
            </div>
            <div class="product-details">
                <h1>{{ $product->name }}</h1>
                <div class="product-pricing">
                    @if($product->old_price)
                        <p class="old-price">${{ number_format($product->old_price, 2) }}</p>
                        <p class="sale-price">${{ number_format($product->price, 2) }}</p>
                    @else
                        <p class="normal-price">${{ number_format($product->price, 2) }}</p>
                    @endif
                </div>


                <button class="size-btn">Standard Size</button>

                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">Add to shopping bag</button>
                </form>

                <p class="description">{{ $product->description }}</p>

            </div>
        </div>
    </section>
@endsection
