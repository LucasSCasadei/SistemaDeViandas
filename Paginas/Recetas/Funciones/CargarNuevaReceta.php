<?php

require("../../../conexiondb/conexionbasededatos.php");

				//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
				//if(isset($_POST['GuardarReceta']))

				//{

                $items4 = ($_POST['RecetaNombre']);
				$items1 = ($_POST['IngedientesNombre']);
				$items2 = ($_POST['IngredientesCantidad']);
				$items3 = ($_POST['Ingredientespeso']);

				// INSERTO EL NOMBRE DE LA NUEVA RECETA ////
			    if ($items4 != "") {
			    	$guardarnombre= "INSERT INTO recetas(recetas_nombre) VALUES('$items4')";
			    	$guardarnombrequery = mysqli_query($conexion,$guardarnombre) or die ("Problemas al insertar".mysqli_error($conexion));
			    }
                //select Id_recetas from recetas order by Id_recetas DESC limit 1
			    $obtenerultimonombre="SELECT Id_recetas FROM recetas ORDER BY Id_recetas DESC limit 1";
                $obtenerultimonombrequery = mysqli_query($conexion,$obtenerultimonombre) or die ("Problemas al insertar".mysqli_error($conexion));
                session_start();

                foreach ($obtenerultimonombrequery as $nombrereceta) {
	              $_SESSION['id'] = $nombrereceta['Id_recetas'];
	             ;}

	             $nombrereceta = $_SESSION['id'];


				///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 3 ARRAYS UNO POR CADA INPUT (////////////////////)
				while(true) {

				    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
				    $item1 = current($items1);
				    $item2 = current($items2);
				    $item3 = current($items3);

				    
				    ////// ASIGNARLOS A VARIABLES ///////////////////
				    $id=(( $item1 !== false) ? $item1:",&nbsp;");
				    $nom=(( $item2 !== false) ? $item2:",&nbsp;");
				    $peso=(( $item3 !== false) ? $item3:",&nbsp;");
				    $nombrereceta = (( $nombrereceta !== false) ? $nombrereceta:",&nbsp;");

				    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
				    $valores='("'.$id.'","'.$nom.'","'.$peso.'","'.$nombrereceta.'"),';

				    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
				    $valoresQ= substr($valores, 0, -1);
				    
				    ///////// QUERY DE INSERCIÓN ////////////////////////////
				    $sql = "INSERT INTO recetas_ingredientes(ingredientes_nombre,ingredientes_cantidad,rela_peso,rela_receta)
					VALUES $valoresQ";

					$query = mysqli_query($conexion,$sql) or die ("Problemas al insertar".mysqli_error($conexion));
					//$sqlRes=$conexion->query($sql) or mysqli_error($conexion);

				    
				    // Up! Next Value
				    $item1 = next($items1);
				    $item2 = next($items2);
				    $item3 = next($items3);

				    // Check terminator
				    if($item1 === false && $item2 === false && $item3 === false) break;
    
				}
		
				//}


header('Location:../../MenuPrincipal/MenuPrincipal.php');

?>