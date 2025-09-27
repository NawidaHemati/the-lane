@extends('layouts.app')

@section('title', ucfirst($category))

@section('content')

    <section class="category-page">
        <div class="category-grid">
            @foreach ($products as $product)
                <div class="product-item">
                    <a href="{{ route('product.show', $product->id) }}">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    </a>
                    <p>{{ $product->name }}</p>
                    <div class="product-pricing">
                        @if($product->old_price)
                            <p class="older-price">${{ number_format($product->old_price, 2) }}</p> <!-- Real old price -->
                            <p class="sales-price">${{ number_format($product->price, 2) }}</p> <!-- Sale price -->
                        @else
                            <p class="normal-price">${{ number_format($product->price, 2) }}</p> <!-- Regular price -->
                        @endif
                    </div>


                </div>
            @endforeach
        </div>
    </section>

@endsection

