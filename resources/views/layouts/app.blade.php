<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('styles')
</head>
<body>

  @include('_includes.nav.main')

  <div id="app">
    @yield('content')
  </div>




  <!-- Scripts -->
  {{-- @if (Request::segment(1) == "manage/dashboard")
    <script src="{{ asset('js/app.js') }}"></script>
  @endif --}}
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
