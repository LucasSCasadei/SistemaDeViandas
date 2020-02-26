<?php

require("../../../conexiondb/conexionbasededatos.php");

				//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
				//if(isset($_POST['GuardarReceta']))

				//{

                $items1 = ($_POST['MaterialNombre']);
				$items2 = ($_POST['Costo']);
				$items3 = ($_POST['Marca']);
				$items4 = ($_POST['Cantidad']);
				$items5 = ($_POST['Materialpeso']);

				///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 3 ARRAYS UNO POR CADA INPUT (////////////////////)
				while(true) {

				    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
				    $item1 = current($items1);
				    $item2 = current($items2);
				    $item3 = current($items3);
				    $item4 = current($items4);
				    $item5 = current($items5);

				    
				    ////// ASIGNARLOS A VARIABLES ///////////////////
				    $nombre=(( $item1 !== false) ? $item1:",&nbsp;");
				    $costo=(( $item2 !== false) ? $item2:",&nbsp;");
				    $marca=(( $item3 !== false) ? $item3:",&nbsp;");
				    $cantidad=(( $item3 !== false) ? $item3:",&nbsp;");
                    $peso=(( $item3 !== false) ? $item3:",&nbsp;");

				    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
				    $valores='("'.$nombre.'","'.$costo.'","'.$marca.'","'.$cantidad.'","'.$peso.'"),';

				    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
				    $valoresQ= substr($valores, 0, -1);
				    
				    ///////// QUERY DE INSERCIÓN ////////////////////////////
				    $sql = "INSERT INTO stock(material_nombre,costo,marca,cantidad,rela_peso)
					VALUES $valoresQ";

					$query = mysqli_query($conexion,$sql) or die ("Problemas al insertar".mysqli_error($conexion));
					//$sqlRes=$conexion->query($sql) or mysqli_error($conexion);

				    
				    // Up! Next Value
				    $item1 = next($items1);
				    $item2 = next($items2);
				    $item3 = next($items3);
				    $item4 = current($items4);
				    $item5 = current($items5);

				    // Check terminator
				    if($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false) break;
    
				}
		
				//}


header('Location:../../MenuPrincipal/MenuPrincipal.php');

?>