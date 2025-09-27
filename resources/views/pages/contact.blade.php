@extends('layouts.app')

@section('title', 'Resolve Shipping Problems')

@section('content')
    <section class="support-form-container">
        <h1 class="support-title">Resolve Shipping Problems</h1>
        <p class="support-subtext">
            Was your package lost, damaged or stolen while being shipped? Let’s get it taken care of.
        </p>
        @if(session('success'))
            <div class="alert-success" style="color: green; margin-bottom: 20px; font-weight: 500;">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert-danger" style="color: red; margin-bottom: 20px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif


        {{-- Contact Form --}}
        <form method="POST" action="{{ route('contact') }}" class="support-form">
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="order_number">Order Number</label>
            <input type="text" name="order_number" id="order_number" placeholder="Enter your order number" required>

            <label for="message">Message</label>
            <textarea name="message" id="message" rows="5" placeholder="Describe your issue..." required></textarea>

            <button type="submit">Send</button>
        </form>

        {{-- Contact Details --}}
        <div class="support-contact">
            <h2>CONTACT</h2>
            <p>Our Customer Service Team is available Monday–Friday from 8am to 5pm PST.<br>
                We are closed on weekends and national holidays.</p>

            <p>
                EMAIL:
                <a href="mailto:support@thelane.com">support@thelane.com</a>
            </p>
        </div>
    </section>
@endsection
