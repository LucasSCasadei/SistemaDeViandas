<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nueva Receta</title>
</head>
<body>
			<div>
			<p>Nueva Receta</p>
		</div>
	<div class=" d-flex justify-content-center"">

		<br>
	    <form action="../Recetas/Funciones/CargarNuevaReceta.php" method="POST">
	    	<div class="input-group mb-3">
             <input type="text" class="form-control" name="RecetaNombre" placeholder="Nombre de la Receta" aria-label="Username" aria-describedby="addon-wrapping" id="RecetaNombre">
            </div>
		    <table id="tabla">
               <tr>
                <td><input class="form-control"  name="IngedientesNombre[]" placeholder="Ingrediente" id="IngedientesNombre"></td>
                <td><input class="form-control"  name="IngredientesCantidad[]" placeholder="Cantidad" id="IngredientesCantidad"></td>
                <td><select class="form-control" name="Ingredientespeso[]" id="Ingredientespeso">
                    <option disabled selected>Peso</option>
                     <?php  include "Funciones/CargarRelaPeso.php"; ?>
                  </select>
                 </td>
                 <td class="eliminar"><button type="button" class="btn" style="background-color: ;"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            </table>
            <br>
            <div class="d-flex justify-content-between align-items-center">
             <button class="btn ml-auto" name="insertar" id="GuardarReceta" name="GuardarReceta" style="background-color: #bbcab5" type="submit">Guardar Receta</button>&nbsp;
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