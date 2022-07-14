{{-- creo il layout comune a tutte le pagine --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- inserisco i segnaposto @yield nei punti che cambieranno ad ogni pagina --}}
        <title>@yield('page-title')</title>

        {{-- linko il file css che gestirà tutte le pagine --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @yield('page-content')
    </body>
</html>