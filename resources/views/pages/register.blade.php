@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <section class="register-page">
        <h2 class="register-title">REGISTER</h2>
        <form action="{{ route('register') }}" method="POST" class="register-form">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Full name" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
        <p class="login-text">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </section>
@endsection

