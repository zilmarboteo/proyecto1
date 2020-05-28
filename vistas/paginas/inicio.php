<?php

if (!isset($_SESSION["validarIngreso"])) {

  echo '<script>window.location = "index.php?pagina=ingreso";</script>';

  return;
} else {

  if ($_SESSION["validarIngreso"] != "ok") {

    echo '<script> window.location = "index.php?pagina=ingreso";</script>';

    return;
  }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th> NO. </th>
      <th>Nombre</th>
      <th>Email</th>
      <th>fecha</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>

    <?php foreach ($usuarios as $key => $value) : ?>

      <tr>
        <td><?php echo ($key + 1) ?></td>
        <td><?php echo $value["nombre"] ?></td>
        <td><?php echo $value["email"] ?></td>
        <td><?php echo $value["fecha"] ?></td>
        <td>

          <div class="btn-group">

            <div > 
              <button href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn-warning"><i class="fas fa-user-edit"></i></a>
            </div>

            <div class ="px-1"> 
              <form method="post">

              <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">

              <button type="submit" class="btn-danger"><i class="fas fa-user-minus"></i></button>
              
              <?php

                $eliminar =  new ControladorFormularios();
                $eliminar -> ctrEliminarRegistro();

              ?>


              </form>
            
            </div> 

          </div>

        </td>
      </tr>

    <?php endforeach ?>

  </tbody>
</table>