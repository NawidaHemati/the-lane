<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THELANE</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Full-screen splash */
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Hide the main content initially */
        .main-content {
            display: none;
        }
    </style>
</head>
<body>

<!-- Splash Screen -->
<div class="splash-screen">
    <img src="{{ asset('images/image 19.jpg') }}" alt="THELANE Logo" width="300px">
</div>

<!-- Redirect Script -->
<script>
    setTimeout(function() {
        document.querySelector('.splash-screen').classList.add('fade-out');
        setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 1850); // Wait for fade-out before redirecting
    }, 2000);
</script>


</body>
</html>
