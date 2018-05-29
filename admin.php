<?php
session_start();
$_SESSION['date'] = date("Y/m/d");
if (!isset($_SESSION['id']) ){
    header("Location: index.php");
    die;
}
 require 'db/db.php';
if ( isset($_GET['m']) ){
    switch($_GET['m']) {
        case "DataGraficasPorYear":
        $paginaPHP = "php/DataGraficasPorYear.php";
        break;
        case "AgregarProyectos":
        $paginaPHP = "php/AgregarProyectos.php";
        break;
        case "clientes":
            $paginaPHP = "php/clientes.php";
        break;
        case "clientesAgregar":
            $paginaPHP = "php/clientesAgregar.php";
        break;
        case "clientesEditar":
            $paginaPHP = "php/clientesEditar.php";
        break;

        case "busquedaInv":
            $paginaPHP = "php/busqueda.php";
        break;
        case "clienteCitas":
            $paginaPHP = "php/clienteCitas.php";
        break;

        /* citas */
        case "CrucesAgregar":
            $paginaPHP = "php/Facturacion/CrucesAgregar.php";
        break;
        case "citasAgregar":
            $paginaPHP = "php/citasAgregar.php";
        break;
        case "citasEditar":
            $paginaPHP = "php/citasEditar.php";
        break;

        
        /* punto de venta */
        case "exportacion":
            $paginaPHP = "php/phillips.php";
        break;
        case "proyectos":
            $paginaPHP = "php/proyectos.php";
        break;
        case "pventaEditar":
            $paginaPHP = "php/pventaEditar.php";
        break;

        /* liquidar */
        case "graficas":
            $paginaPHP = "php/graficas.htm";
        break;

        /* categorias */
        case "categorias":
            $paginaPHP = "php/categorias.php";
        break;
        case "categoriasAgregar":
            $paginaPHP = "php/categoriasAgregar.php";
        break;
        case "trGastos":
            $paginaPHP = "php/trGastos.php";
        break;
        case "resumen":
            $paginaPHP = "php/resumen.php";
        break;

        case "modificar":
            $paginaPHP = "php/modificar.php";
        break;

       
        case "reportescats":
            $paginaPHP = "php/reportescat.php";
        break;
        //reporte Miriam
        case "reportes":
            $paginaPHP = "php/reportesPed.html";
        break;
        //reporte Salma
        case "reportePedCon":
            $paginaPHP = "php/reportePedCon.html";
        break;
        case "tickets":
            $paginaPHP = "php/tickets.php";
        break;
        case "ticketsAgregar":
            $paginaPHP = "php/ticketsAgregar.php";
        break;
        case "trInvoice":
            $paginaPHP= "php/trInvoice.php";
        break;
        case "trbusqueda":
            $paginaPHP= "php/trbusqueda.php";
        break;
        case "trmodificar":
            $paginaPHP= "php/trmodificar.php";
        break;
        /* usuarios */
        case "usuarios":
            $paginaPHP = "php/Configuracion/usuarios.php";
        break;
        case "usuariosAgregar":
            $paginaPHP = "php/Configuracion/usuariosAgregar.php";
        break;
        case "usuariosEditar":
            $paginaPHP = "php/Configuracion/usuariosEditar.php";
        break;

        /* Bitacora */
        case "bitacora":
            $paginaPHP = "php/bitacora.php";
        break;
    }
} else {
        $paginaPHP = "php/null.php";
}

$errorMsg = "";

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>TCI | Sistema </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
  
      <!-- Mainly scripts -->
      
    <script src="js/jquery-3.1.0.js"></script>
    <script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery-3.1.0.js"%3E%3C/script%3E'))</script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>     

  
    
    <link rel="stylesheet" type="text/css" href="Lib/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="Lib/css/dx.light.css" /> 
    <script src="Lib/js/dx.all.js"></script>
    <script src="Lib/js/jszip.min.js"></script>
    <script src="js/data.js"></script>

    <!--Configuracion -->
    <script src="js/Configuracion.js"></script>
    <link rel="stylesheet" type ="text/css" href ="style.css" />
    <!-- Globalize scripts -->
    <script type="text/javascript" src="Lib/js/cldr.js"></script>
    <script type="text/javascript" src="Lib/js/cldr/event.js"></script>
    <script type="text/javascript" src="Lib/js/cldr/supplemental.js"></script>
    <script type="text/javascript" src="Lib/js/globalize.js"></script>
    <script type="text/javascript" src="Lib/js/globalize/message.js"></script>
    <script type="text/javascript" src="Lib/js/globalize/number.js"></script>
    <script type="text/javascript" src="Lib/js/globalize/currency.js"></script>
    <script type="text/javascript" src="Lib/js/globalize/date.js"></script>
   
  

  
</head>

<body class="container">

     <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="admin.php?m=null" class="nav-link"><i class="fa fa-home"></i><span class="nav-label">&nbsp;Inicio</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a href="admin.php?m=usuarios" class="dropdown-item"><i class="fas fa-users"></i></i> Usuarios</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cruces y Cajas</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a href="admin.php?m=CrucesAgregar" class="dropdown-item"><i class="fas fa-plus-square"></i> Agregar Cruces</a>
                <a href="admin.php?m=busquedaInv" class="dropdown-item"><i class="fas fa-search"></i> Busqueda Cruces</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transportaciones</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a href="admin.php?m=trbusqueda" class="dropdown-item" ><i class="fas fa-search"></i>&nbsp;Busqueda</a>
                    <a href="admin.php?m=trInvoice" class="dropdown-item"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;&nbsp;Invoice</a>
                    <a href="admin.php?m=trGastos" class="dropdown-item"><i class="fas fa-money-check-alt"></i>&nbsp;Gastos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a href="admin.php?m=reportePedCon" class="dropdown-item" ><i class="fas fa-file-alt"></i>&nbsp;Consolidados</a>
                    <a href="admin.php?m=reportes" class="dropdown-item" ><i class="fas fa-file-excel"></i>&nbsp;Pedimentos</a>
                    <a href="admin.php?m=graficas" class="dropdown-item" ><i class="fas fa-chart-area"></i>&nbsp;Grafica</a>

              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </nav>
    <main role="main">
        <div class="jumbotron">
          <div class="col-sm-12 mx-auto">
            <?php include $paginaPHP; ?>
          </div>
        </div>
      </main>
    </div>
</body>
 
</html>
