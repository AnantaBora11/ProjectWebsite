<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>template 1</title>
        <link rel="stylesheet" href="{{ asset('css/public/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/public/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/public/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/public/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/public/contact.css') }}">
        <link rel="stylesheet" href="{{ asset('css/public/home.css') }}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        <header>
            <img src="img/logo.webp" class="logo">
            <nav class="navigation">
                <a href="{{ route('home') }}">Home</a>
                <a href="#">Contact</a>
                <a href="{{ route('about') }}">About</a>
                <button onclick="window.location.href='{{ route('login') }}'" class="btnLogin-popup">Get Started</button>
            </nav>
        </header>

        <main>
            @yield('template1')
        </main>

        @if(Route::currentRouteName() != 'login')
        <footer>
            <div class="footerContainer">
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-google-plus"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footerNav">
                    <ul><li><a href="">Home</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">our Team</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2023; Designed by <span class="designer">Noman</span></p>
            </div>
        </footer>
        @endif
        
        <script src="/js/public/login.js"></script>
        <script src="/js/public/contact.js"></script>
    </body>
</html>