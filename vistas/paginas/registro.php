<div class="d-flex justify-content-center">
  <form class="p-5 bg-light" method="post">
    <div class="container-fluid">
      <form action="/action_page.php">
        <div class="form-group">
          <label for="Nombre">Nombre:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user-plus"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Nombre" name="registroNombre">
          </div>
        </div>
        <div class="form-group">
          <label for="Nombre">email:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Enter email" name="registroEmail">
          </div>
        </div>
        <div class="form-group">
          <label for="Nombre">contraseña:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="Password" class="form-control" placeholder="Enter password" name="registroPassword">
          </div>
        </div>

        <?php

        # forma que se instancia la clase de un metodo no estatico

        // $registro = new ControladorFormularios();
        //$registro->ctrRegistro();

        # forma que se instancia la clase de un metodo estatico

        $registro = ControladorFormularios::ctrRegistro();

        if ($registro == "ok") {

          echo '<script>
            
          if (window.history.replaceState){
          
              window.history.replaceState( null, null, window.location.href);
  
          }
            </script>';

          echo '<div class="alert alert-success"> el usuario ha sido registrado</div>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </form>
</div>