@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="slider">
            <a href="{{ route('category', 'new') }}">
                <div class="slide fade">
                    <img src="{{ asset('images/Modestly.jpg') }}" alt="Fashion Slide 1" width="60%">
                </div>
            </a>
            <a href="{{ route('category', 'new') }}">
                <div class="slide fade">
                    <img src="{{ asset('images/image3.jpg') }}" alt="Fashion Slide 2" width="60%">
                </div>
            </a>
            <a href="{{ route('category', 'new') }}">
                <div class="slide fade">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Fashion Slide 3" width="60%">
                </div>
            </a>
        </div>

        <div class="hero-text">
            <p class="tagline">Shop the Spring 2025 Womenswear Collection</p>
        </div>
        <br><br>
        <section class="featured-collections">
            <h2 class="collections-title">Featured Collections</h2>
            <div class="collections-grid">
                <a href="{{ route('category', 'basics') }}" class="collection-card">
                    <img src="{{ asset('images/basics.png') }}" alt="Basics">
                    <h3>Basics</h3>
                    <p>SHOP NOW</p>
                </a>

                <a href="{{ route('category', 'scarves') }}" class="collection-card">
                    <img src="{{ asset('images/scarves.png') }}" alt="Scarves">
                    <h3>Scarves</h3>
                    <p>SHOP NOW</p>
                </a>

                <a href="{{ route('category', 'shoes') }}" class="collection-card">
                    <img src="{{ asset('images/glitter.png') }}" alt="Shoes">
                    <h3>Shoes</h3>
                    <p>SHOP NOW</p>
                </a>

                <a href="{{ route('category', 'new') }}" class="collection-card">
                    <img src="{{ asset('images/sunhome.png') }}" alt="New Arrivals">
                    <h3>New Arrivals</h3>
                    <p>SHOP NOW</p>
                </a>
            </div>
        </section>

        <br><br>
        <section class="full-image-banner with-overlay">
            <img src="{{ asset('images/greybody.jpg') }}" alt="Spring Campaign" class="hero-banner-img">

            <div class="banner-text-overlay">
                <h2>TRENDING SHADES</h2>
                <p>Grey, baby pink, and more of spring's trending shades</p>
                <a href="{{ route('category', 'basics') }}" class="shop-now-link">SHOP NOW</a>
            </div>
        </section>


        <section class="featured-basics">

            <div class="product-grid">
                @foreach ($basics as $product)
                    <div class="featured-products">
                        <a href="{{ route('product.show', $product->id) }}">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">${{ number_format($product->price, 2) }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>



    </section>
@endsection
