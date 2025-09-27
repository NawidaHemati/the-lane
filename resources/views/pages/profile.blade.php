@extends('layouts.app')

@section('title', 'Your Profile')

@section('content')
    <section class="profile-page">
        <div class="profile-container">
            <aside class="profile-sidebar">
                <h3>{{ Auth::user()->name }}</h3>
                <ul class="profile-nav">
                    <li><a href="#" class="inactive-link">Account Overview</a></li>
                    <li><a href="#" class="inactive-link">My Orders</a></li>
                    <li><a href="#" class="inactive-link">Change Password</a></li>
                    <li><a href="#" class="inactive-link">Payment Methods</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="logout-btn">Sign Out</button>
                        </form>
                    </li>

                </ul>
            </aside>

            <div class="profile-content">
                @yield('profile-section')
                <div class="profile-center-content">
                    <h2>Welcome, {{ Auth::user()->name }}</h2>
                    <div class="profile-box">
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Joined:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
