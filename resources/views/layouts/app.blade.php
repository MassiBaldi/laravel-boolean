<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('meta_description', 'Boolean Careers - Corso Full Stack')">
    <title>@yield('title', 'Boolean Careers')</title>
    @yield('additional_css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('partials._header')

    @yield('content')

    @include('partials._footer')

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </body>
</html>
