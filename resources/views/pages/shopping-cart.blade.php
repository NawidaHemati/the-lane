@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <section class="cart-slideout">

        @if(session('cart') && count(session('cart')) > 0)
            <div class="cart-products">
                @foreach(session('cart') as $id => $details)
                    <div class="cart-product">
                        <div class="cart-image">
                            <img src="{{ asset('images/' . $details['image']) }}" alt="{{ $details['name'] }}">
                        </div>
                        <div class="cart-info">
                            <p class="product-name">{{ $details['name'] }}</p>
                            <p class="product-price">${{ number_format($details['price'], 2) }}</p>

                            {{-- Quantity Controls --}}
                            <form action="{{ route('cart.update', $id) }}" method="POST" class="quantity-form">
                                @csrf
                                @method('PATCH')
                                <div class="quantity-controls">
                                    <button type="submit" name="action" value="decrease">−</button>
                                    <span>{{ $details['quantity'] }}</span>
                                    <button type="submit" name="action" value="increase">+</button>
                                </div>
                            </form>

                            <a href="{{ route('cart.remove', $id) }}" class="remove-link">Remove</a>
                        </div>
                    </div>
                @endforeach

                <div class="cart-summary">
                    <p class="subtotal">Total: ${{ number_format(session('cart_total'), 2) }}</p>
                    <a href="{{ route('checkout') }}" class="checkout-button">Proceed to checkout</a>
                </div>
            </div>
        @else
            <div class="empty-cart">
                <img src="{{ asset('images/cart1.png') }}" alt="Empty Cart" class="empty-cart-icon">
                <div class="cart-mess">
                    <img src="{{ asset('images/cart.png') }}" alt="Cart Message">
                </div>
            </div>
        @endif
    </section>
@endsection
