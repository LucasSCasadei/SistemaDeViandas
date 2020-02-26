<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Compra</title>
</head>
<body>
  <script type="text/javascript">
    $(document).ready(function(){
    $('input').tooltip();
});
  </script>
			<div>
			<p>Agregar Compra</p>
		</div>
	<div class=" d-flex justify-content-center"">

		<br>
	    <form action="../Stock/Funciones/CargarCompra.php" method="POST">
		    <table id="tabla">
               <tr>
                <td><input class="form-control"  name="MaterialNombre[]" placeholder="Material" id="MaterialNombre"  data-placement="bottom" title="Nombre del Material"></td>
                <td><input class="form-control"  name="Costo[]" placeholder="Costo" id="Costo" data-placement="bottom" title="Costo"></td>
                <td><input class="form-control"  name="Marca[]" placeholder="Marca" id="Marca" data-placement="bottom" title="Marca"></td>
                <td><input class="form-control"  name="Cantidad[]" placeholder="Cantidad" id="Cantidad" data-placement="bottom" title="Cantidad"></td>
                <td><select class="form-control" name="Materialpeso[]" id="Materialpeso" data-placement="bottom" title="Peso">
                    <option disabled selected>Peso</option>
                     <?php  include "../Recetas/Funciones/CargarRelaPeso.php"; ?>
                  </select>
                 </td>
                 <td class="eliminar"><button type="button" class="btn" style="background-color: ;"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            </table>
            <br>
            <div class="d-flex justify-content-between align-items-center">
             <button class="btn ml-auto" name="insertar" id="GuardarReceta" name="GuardarReceta" style="background-color: #bbcab5" type="submit">Agregar Compra</button>&nbsp;
             <button type="button" class="btn" id="adicional" style="background: #92aa88;">Mas</button>
           </div>
	    </form>
  </div>
      <script>
        $(function(){
        // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
        $("#adicional").on('click', function(){
          $("#tabla tbody tr:eq(0)").clone().appendTo("#tabla");
        });
       
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){
          var parent = $(this).parents().get(0);
          $(parent).remove();
        });
      });
    </script>
</body>
</html>