<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mokaddes Hosain - Software Developer | portfolio 2022</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <meta name="description" content="Mokaddes Hosain - Software Developer | portfolio " . {{date('Y')}}>
    <meta name="author" content="Mokaddes Hosain">

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

    @include('layouts.top_nav')

    @yield('content')


    @include('layouts.footer')
    @include('layouts.script')
    @stack('js')

</body>

</html>
