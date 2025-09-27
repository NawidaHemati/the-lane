
@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <section class="checkout-container">
        <h2 class="checkout-title">Checkout</h2>

        <form method="POST" action="{{ route('checkout.place') }}" class="checkout-form" id="checkoutForm">
            @csrf

            <!-- Shipping Address -->
            <div class="form-section">
                <h3>Shipping Address</h3>
                <input type="text" name="full_name" placeholder="Full Name" class="ship-field" required>
                <input type="text" name="address" placeholder="Street Address" class="ship-field" required>
                <input type="text" name="city" placeholder="City" class="ship-field" required>
                <input type="text" name="postal_code" placeholder="Postal Code" class="ship-field" required>
                <input type="text" name="country" placeholder="Country" class="ship-field" required>
            </div>

            <!-- Payment Info (Hidden by default) -->
            <div class="form-section" id="payment-section" style="display: none;">
                <h3>Payment Information</h3>
                <input type="text" name="card_number" placeholder="Card Number" required>
                <input type="text" name="card_name" placeholder="Name on Card" required>
                <input type="text" name="expiry_date" placeholder="MM/YY" required>
                <input type="text" name="cvv" placeholder="CVV" required>
            </div>

            <!-- Order Summary -->
            <div class="form-section">
                <h3>Order Summary</h3>
                @if(session('cart') && count(session('cart')) > 0)
                    <ul class="checkout-items">
                        @foreach(session('cart') as $item)
                            <li class="checkout-item">
                                <div class="item-details">
                                    <p>{{ $item['name'] }}</p>
                                    <p>Quantity: {{ $item['quantity'] }}</p>
                                    <p>${{ number_format($item['price'], 2) }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <p class="checkout-total">Total: <strong>${{ number_format(session('cart_total'), 2) }}</strong></p>
                @else
                    <p>Your cart is empty.</p>
                @endif
            </div>

            <button type="submit" class="place-order-btn" id="placeOrderBtn">Place Order</button>

        </form>

    </section>
@endsection
