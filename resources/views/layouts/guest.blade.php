<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <link rel="stylesheet" type="text/css" href="/css/misEstilos.css"> 
        <title>{{ config('app.name', 'Sistema Productos') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bodyContein">
        <div class="contenido">           
            <section class="main">
              {{ $slot }}
            </section>            
        </div>
        
    </body>
    <footer>
           <div class="autor">
             <p>ADHARA GALARZA MALDONADO</p>
           </div>
           <div class="redes-sociales">
             <a href="https://www.facebook.com/share/sFbkVvpahErfujdT/?mibextid=qi2Omg">Facebook</a>
             <a href="https://www.facebook.com/share/sFbkVvpahErfujdT/?mibextid=qi2Omg">Instagrama</a>
           </div>
    </footer>
</html>
