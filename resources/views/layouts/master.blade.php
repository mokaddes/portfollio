<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mokaddes Hosain - Software Developer | portfolio {{date('Y')}}</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="Mokaddes Hosain - Software Developer | portfolio "  {{date('Y')}}>

    <meta name="author" content="Mokaddes Hosain">
    <meta property="og:title" content="Mokaddes Hosain - Software Developer"/>
    <meta property="og:description" content="Mokaddes Hosain - Software Developer | portfolio "  {{date('Y')}}>
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

    @include('layouts.top_nav')

    @yield('content')


    @include('layouts.footer')
    @include('layouts.script')
    @stack('js')

</body>

</html>
