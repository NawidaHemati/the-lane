@extends('layouts.app')

@section('title', 'Order Confirmation')

@section('content')
    <section class="order-confirmation">
        <div class="confirmation-wrapper">
            <h1>Thank you for your order</h1>
            @if(session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif

            <p class="confirmation-message">We’ve received your order and will start processing it shortly.</p>

            <div class="confirmation-box">
                <h3>Order Confirmation</h3>
                <p>You’ll get a confirmation email with order details.</p>

                @if(isset($cart) && count($cart) > 0)
                    <div class="order-summary">
                        <ul class="order-list">
                            @foreach($cart as $item)
                                <div class="order-item">
                                    <strong>{{ $item['name'] }}</strong> – Quantity: {{ $item['quantity'] }} – ${{ number_format($item['price'], 2) }}
                                </div>
                            @endforeach
                        </ul>
                        <p class="order-total"><strong>Total:</strong> ${{ number_format($cartTotal, 2) }}</p>
                    </div>
                @endif

                <a href="{{ route('home') }}" class="back-home-btn">Return to Home</a>
            </div>
        </div>
    </section>
@endsection
