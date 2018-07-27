<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('css/pdf.css') }}" rel="stylesheet">


        <title>SIPLAN | Módulo de Reportes</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-offset-2">
                	@yield('content')
                </div>
            </div>
        </div>
    </body>
</html>