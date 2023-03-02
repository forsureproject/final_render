<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Forsure, Forsure Real Estate, Real Estate Ghana, Ghana Diaspora, Racism, White Supremacy, Year of Return, Year-of-return, We are a team of real estate developers focused on land acquisition and collaborative partnerships, built on transparency and mutual trust, to create longevity in client relationships. With a pragmatic approach, we provide bespoke services and superior customer service to help clients achieve their dream homes. Our investment in long-term relationships and results delivered to clients sets us apart as a fast-growing real estate company committed to building for the future with international standards, including a Diaspora community. Join us for a well-focused and committed team that measures success by client satisfaction.">
    <meta name="author" content="">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon_io/favicon.ico') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <title>Forsure Real Estate Ltd</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700"
        rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css"
        integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen h-screen">

    <div class="animsition">
        <div class="wrapper boxed">
            <!-- Content CLick Capture-->
            <div class="click-capture"></div>
            <!-- Sidebar Menu-->
            <div class="menu">
                <span class="close-menu icon-cross2 right-boxed"></span>
                <x-layouts.menu />
            </div>

            <x-layouts.header />

            {{-- <main class="jumbotron">

                <!-- Start revolution slider -->

                @if (isset($slider))
                    {{ $slider }}
                @endif
            </main> --}}
            <div class="content">
                <div class="my-8 p-8 max-w-2xl mx-auto min-h-full h-auto
                bg-gray-500/20 rounded-lg">
                    {{ $slot }}

                </div>

            </div>

            <!-- jQuery -->

            <x-layouts.footer-layout />
            <x-layouts.scripts />
        </div>
</body>

</html>
