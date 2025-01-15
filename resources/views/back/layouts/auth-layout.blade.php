<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('pageTitle')</title>
    <!-- Base URL -->
    <base href="/">
<link href="/back/dist/css/tabler.min.css" rel="stylesheet"/>
<link href="/back/dist/css/tabler-flags.min.css" rel="stylesheet"/>
<link href="/back/dist/css/tabler-payments.min.css" rel="stylesheet"/>
<link href="/back/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
<link href="/back/dist/css/demo.min.css" rel="stylesheet"/>

    @stack('stylesheet')
    @livewireStyles
  </head>
  <body class="d-flex flex-column">
    @yield('content')

    <!-- JavaScript files -->
    <script src="./dist/js/tabler.min.js" defer></script>
    @stack('scripts')
    @livewireScripts
    <script src="./dist/js/demo.min.js" defer></script>
  </body>
</html>
