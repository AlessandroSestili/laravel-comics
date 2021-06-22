<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- Titolo che cambia per ogni pagina --}}
    <title>@yield('page_title')</title>


    {{-- Import Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">


    {{-- Import Font Awesome --}}
    <script src="https://kit.fontawesome.com/010b527a19.js" crossorigin="anonymous"></script>


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

fds

</head>
<body>
    @extends('partials.header')

    <main>
        @yield('content')
    </main>

    @extends('partials.footer')
</body>
</html>