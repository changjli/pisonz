<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pisonz Store</title>
  <link rel = "icon" href = "{{ asset('assets/logo.png') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/final.css') }}" /> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,200;1,300&display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap"
    rel="stylesheet">
</head>

<body>
  @include('user.navbar')

  @yield('container')

  @include('user.footer')
</body>

</html>
