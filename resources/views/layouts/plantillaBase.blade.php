<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--referncia a la carpeta de estilos-->
    <link rel="stylesheet" href="{{asset('css/diseño.css')}}">
    <!--Estilos de letras-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <title>AutoCreditos Elite</title>
  </head>
  <body id="pagina">
    <header class="header">
        <h1 class="text-left">AutoCreditos ELITE</h1>
    </header>
    <section id="contenido">
      <article id="info">
        @yield('contenido')
      </article>
    </section>
    <footer>
      <section>

      </section>
    </footer>
  </body>
</html>