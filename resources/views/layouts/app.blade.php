<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | THELANE</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">

</head>
<body>
<header class="navbar">
    <nav class="nav-left">
            <div class="dropdown">
                <a href="#">Women</a>
                <div class="dropdown-content">
                    <a href="{{ route('category', 'basics') }}">Basics</a>

                    <a href="{{ route('category', 'scarves') }}">Scarves</a>
                        <a href="{{ route('category', 'shoes') }}">Shoes</a>

                        <a href="{{ route('category', 'accessories') }}">Accessories</a>
                        <a href="{{ route('category', 'new') }}">New Arrivals</a>
                        <a href="{{ route('category', 'sale') }}">Sale</a>
                </div>
            </div>

        <a href="{{ route('category', 'sale') }}">Sale</a>
    </nav>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/image5.jpg') }}" alt="THELANE">
        </a>
    </div>

    <nav class="nav-right">
        <a href="#" onclick="toggleSearchBar()">Search</a>

        <!-- Popup Search Form -->
        <div id="searchBarContainer" class="search-bar-container hidden">
            <form action="{{ route('search') }}" method="GET" class="search-form">
                <input type="text" name="query" class="search-popup-input" placeholder="Search..." autofocus>
            </form>
        </div>
        @auth
            <a href="{{ route('profile') }}">Profile</a>

        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
        <a href="{{ route('cart.index') }}" class="cart-link">
            Shopping Bag
            @php
                $cartCount = is_array(session('cart')) ? array_sum(array_column(session('cart'), 'quantity')) : 0;
            @endphp
            @if($cartCount > 0)
                <span class="cart-badge">{{ $cartCount }}</span>
            @endif
        </a>


    </nav>
</header>

<main>

    @yield('content')
</main>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-column">
            <h4>Choose language:</h4>
            <p>English</p>
            <h4>Select country:</h4>
            <p>Türkiye</p>
        </div>
        <div class="footer-column">
            <h4>About the Brand</h4>
            <p><a href="{{ route('about') }}">About Us</a></p>
            <p><a href="{{ route('contact') }}">Contact Us</a></p>

        </div>

        <div class="footer-column">
            <h4>FAQ</h4>
            <p><a href="{{ route('legal') }}">Legal & Privacy</a></p>
            <p><a href="#">Accessibility</a></p>
        </div>

    </div>
    <div class="footer-bottom">
        <p>© 2025 THELANE. All rights reserved.</p>
    </div>
</footer>
<script src="{{ asset('js/slider.js') }}"></script>
<<script>
    function toggleSearchBar() {
        const container = document.getElementById('searchBarContainer');
        container.classList.toggle('hidden');

        const input = container.querySelector('input');
        if (!container.classList.contains('hidden')) {
            input.focus();
        }
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.getElementById('searchBarContainer').classList.add('hidden');
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000); // 3000ms = 3 seconds
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const shippingInputs = document.querySelectorAll('.ship-field');
        const paymentSection = document.getElementById('payment-section');
        const placeOrderBtn = document.getElementById('placeOrderBtn');

        function validateShipping() {
            let filled = true;
            shippingInputs.forEach(input => {
                if (input.value.trim() === '') {
                    filled = false;
                }
            });

            if (filled) {
                paymentSection.style.display = 'block';
                placeOrderBtn.disabled = false;
            } else {
                paymentSection.style.display = 'none';
                placeOrderBtn.disabled = true;
            }
        }

        shippingInputs.forEach(input => {
            input.addEventListener('input', validateShipping);
        });
    });
</script>



</body>
</html>
