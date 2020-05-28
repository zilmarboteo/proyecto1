<div class="d-flex justify-content-center">
  <form class="p-5 bg-light" method="post">
        <div class="form-group">
          <label for="Nombre">email:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Enter email" name="ingresoEmail">
          </div>
        </div>
        <div class="form-group">
          <label for="Nombre">contraseña:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Enter password" name="ingresoPassword">
          </div>
        </div>

        <?php

        # forma que se instancia la clase de un metodo no estatico

        // $registro = new ControladorFormularios();
        //$registro->ctrRegistro();

        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();
        

        ?>
        <button type="submit" class="btn btn-primary">ingresar</button>
      </form>
    </div>
  </form>
</div>