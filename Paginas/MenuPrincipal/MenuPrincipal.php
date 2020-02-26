<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="DinoSoftware">

	<title>Menu Principal</title>

	<!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="../../fontawesome-free-5.8.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.8.2-web/css/all.css">

</head>
<body>
	<!-- container -->
	<div class="container-fluid">
		<!-- nav-logo -->
		<div class="row">
			<div class="col-lg-12">
				<div class="navbar navbar-expand fixed-top flex-column flex-md-row bd-navbar" id="nav-logo" style="background-color: #343a40;">
					<div class="navbar-nav bd-navbar-nav flex-row mx-xl-auto mx-lg-auto mx-md-auto" id="menu">
						 <a class="nav-item nav-link" id="home"><i class="fas fa-home fa-lg icono"></i></a>
					</div>
				</div>
			</div>
	    </div>
	    <!-- nav-menu -->
	    <div class="row" style="" id="nav-menu">
	    	<div class="col-lg-12" style="background-color: #343a40;height: 100px;">
	    		<div class="nav-link" style="position: relative;margin-top: 65px;color: white;display: flex;justify-content: center;align-items: center;width: 100%;">
                    <!-- Recetas -->
                    <div class="dropdown dropdown-btn">
	    			    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex;justify-content: center;align-items: center;margin-left: 15px;text-decoration:none;color:white;" href="" id="nav-recetas">Recetas</a>

	    			    <div class="dropdown-menu" aria-labelledby="nav-recetas">
	    				    <a class="dropdown-item" href="#" id="NuevaReceta">Nueva Receta</a>
                            <a class="dropdown-item" href="#">Lista de Recetas</a>
                        </div>
                    </div>
                    <!-- Recetas -->

                    <!-- Stock -->
                    <div class="dropdown dropdown-btn">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex;justify-content: center;align-items: center;margin-left: 15px;text-decoration:none;color:white;" href="" id="nav-stock">Stock</a>

                        <div class="dropdown-menu" aria-labelledby="nav-stock">
	    				    <a class="dropdown-item" href="#" id="AgregarCompra">Agregar Compra</a>
                            <a class="dropdown-item" href="#">Ver Stock</a>
                        </div>
                    </div>
                    <!-- Stock -->

                    <!-- Informes -->
                    <div class="dropdown dropdown-btn">
                    	<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex;justify-content: center;align-items: center;margin-left: 15px;text-decoration:none;color:white;" href="" id="nav-factura">Informes</a>

                    	<div class="dropdown-menu" aria-labelledby="nav-factura">
                    	    <a class="dropdown-item" href="#">Informes de Venta</a>
                            <a class="dropdown-item" href="#">Informes de Empleado</a>
                    	</div>
                    </div>
                   <!-- Informes --> 

                    <!-- Factura -->
                    <div class="dropdown dropdown-btn">
                    	<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex;justify-content: center;align-items: center;margin-left: 15px;text-decoration:none;color:white;" href="" id="nav-factura">Factura</a>

                    	<div class="dropdown-menu" aria-labelledby="nav-factura">
                    	    <a class="dropdown-item" href="#">Nueva Factura</a>
                            <a class="dropdown-item" href="#">Historial</a>
                    	</div>
                    </div>
	    			<!-- Factura -->
	    		</div>
	    	</div>
	    </div>

      <!-- Bienvenido -->
	    <div class="row d-flex justify-content-center"  style="margin-top: 30px;">
	    	<div class="col-lg-12 d-flex justify-content-center">
	    		<div class="card"  style="width: 50rem;">
	    			<div class="card-body" id="contenedorprincipal">
	    				<p>Bienvenido</p>
	    			</div>
	    			<div class="dropdown-divider"></div>
	    			<a class="nav-link ml-auto" style="color: black;" href="" id="fecha"><i class="far fa-clock"></i></a>
	    	    </div>
	    	</div>
	    </div>
      <!-- Bienvenido -->

      <!-- Configuracion -->
	    <div class="row" style="margin-top: 250px;margin-left: 10px;margin-bottom:20px;">
	    	<div class="col-lg-2">
	    		<a href="" class="text-muted" style="text-decoration: none;"><i class="fas fa-cog"></i> Configuracion</a>
	    		<div class="dropdown-divider"></div>
	    		<a href="" class="text-muted" style="text-decoration: none;">Ver Perfil</a>
	    		<br>
	    		<a href="" class="text-muted" style="text-decoration: none;">Nuevo Empleado</a>
	    		<br>
	    		<a href="" class="text-muted" style="text-decoration: none;">Soporte Tecnico</a>
	    	</div>
	    </div>
      <!-- Configuracion -->
	</div>
    <!-- container -->
    

	 <script> 
	 	var dia = new Date();

	 	var mes=new Array(12);
          dia[0]="Enero";
          dia[1]="Febrero";
          dia[2]="Marzo";
          dia[3]="Abril";
          dia[4]="Mayo";
          dia[5]="Junio";
          dia[6]="Julio";
          dia[7]="Agosto";
          dia[8]="Septiembre";
          dia[9]="Octubre";
          dia[10]="Noviembre";
          dia[11]="Diciembre";

         document.getElementById('fecha').innerHTML = '<i class="far fa-clock"></i>' + ' ' + dia.getDate() + ' ' + dia[dia.getMonth()] + ' ' + dia.getFullYear();
     </script>

  <script src="../../vendor/jquery/jquery.js"></script>
  <script src="../../ajax/ajax.js"></script>
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../js/CargarPaginas.js"></script>

  <script>
    $(document).ready(function(){
      $('#NuevaReceta').on('click', function() {
        $('#contenedorprincipal').load('../Recetas/NuevaReceta.php')
      })
      $('#AgregarCompra').on('click', function() {
        $('#contenedorprincipal').load('../Stock/AgregarCompra.php')
      })
    })
  </script>
</body>

</html>

