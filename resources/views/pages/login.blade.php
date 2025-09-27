@extends('layouts.app')

@section('title', 'Login')

@section('content')
    {{-- Flash messages --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <section class="login-page">
        <h2 class="login-title">LOGIN</h2>
        <form action="{{ route('login.submit') }}" method="POST" class="login-form">

        @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <p class="register-text">Don't have an account? <a href="{{ route('register') }}">Create one</a></p>
    </section>
@endsection
