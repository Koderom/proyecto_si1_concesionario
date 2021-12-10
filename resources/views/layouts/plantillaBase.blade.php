<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AutoCreditos Elite</title>
  </head>
  <body class="bg-ligth text-white">
    <head>
      <div class="container-fluid bg-danger">  
        <div class="row">
            <div class="col-md">
                <header class="py-1">
                    <h3 class="text-left">AutoCreditos ELITE</h3>
                </header>
            </div>
        </div>
    </div>
    </head>
    <div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">
        <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
          <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
            <div class="collapse navbar-collapse">
              <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="\usuarios"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white">Gestionar Usuario</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="\clientes"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white">Gestionar Cliente</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="#"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white">Gestionar Venta</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="\vehiculos"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white">Gestionar vehiculo</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="\marcas"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white ">Gestionar Marca</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link pl-0 text-nowrap" href="\categorias"><i class="fa fa-bullseye fa-fw"></i><span class="font-weigth-bold text-white">Gestionar Categoria</span></a>
                </li>
              </ul>
              
            </div>
          </nav>
        </aside>
        <div class="col bg-ligth  "style="background-color: #e9ecef">
          @yield('contenido')
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>