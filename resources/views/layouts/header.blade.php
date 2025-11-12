{{-- resources/views/components/header.blade.php --}}

<header class="main-header">
    <div class="container">

        {{-- logo --}}
        <a href="/" class="logo">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="LaslessVPN logo">
            <span class="logo-text">Lasless<strong class="text-primary">VPN</strong></span>
        </a>

        {{-- main navbar --}}
        <nav class="main-nav">
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#Features">Features</a></li>
                <li><a href="#Pricing">Pricing</a></li>
                <li><a href="#Testimonials">Testimonials</a></li>
                <li><a href="#Help">Help</a></li>
            </ul>
        </nav>

        {{-- right button --}}
        <div class="header-actions">

            {{-- sign in --}}
            <a href="#" class="btn-signin">Sign In</a>

            {{-- sing up --}}
            <a href="#" class="button-primary btn-signup">Sign Up</a>
        </div>
    </div>
</header>
