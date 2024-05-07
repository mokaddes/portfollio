<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mokaddes Hosain - Software Developer | portfolio {{date('Y')}}</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="Mokaddes Hosain - Software Developer | portfolio " {{date('Y')}}>

    <meta name="author" content="Mokaddes Hosain">
    <meta property="og:title" content="Mokaddes Hosain - Software Developer"/>
    <meta property="og:description" content="Mokaddes Hosain - Software Developer | portfolio " {{date('Y')}}>
    <meta property="og:image" content="{{ asset('public/assets/images/mokaddes.jpg') }}">
    <meta property="og:image:width" content="700"/>
    <meta property="og:image:height" content="400"/>
    <meta property="og:site_name" content="Mokaddes"/>
    <meta property="og:url" content="https://mokaddes.com"/>
    <meta property="og:type" content="WEBSITE"/>

    @include('layouts.style')
    @stack('css')

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2010060-39"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '');
    </script>


</head>

<body id="page-top">

@if(Route::currentRouteName() == 'frontend.index')
    @include('layouts.top_nav')
    @else
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endif

@yield('content')

@if(Route::currentRouteName() == 'frontend.index')
    @include('layouts.footer')
@endif
@include('layouts.script')
@stack('js')

</body>

</html>
