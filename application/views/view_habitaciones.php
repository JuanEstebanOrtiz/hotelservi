<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <a href="#" class="btn btn-primary"
      data-toggle="modal" data-target="#mAgregar">Agregar Habitacion</a>

      <div class="modal fade" id="mAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

          <form class="" action="<?php echo base_url() ?>index.php/habitaciones/agregaHabitaciones" method="post">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Habitacion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <input type="text" name="numerohabitacion" value="" placeholder="habitacion">

              <input type="text" name="descripcion" value="" placeholder="descripcion">


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </div>
          </form>
        </div>
      </div>


    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero Habitacion</th>
      <th scope="col">descripcion</th>
      <th scope="col">modificar</th>
      <th scope="col">eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(!empty($usuari)){
        foreach ($usuari as $fila) {
?>
    <tr>
      <th scope="row"><?php echo $fila->id; ?></th>
      <td><?php echo $fila->numerohabitacion; ?></td>
      <td><?php echo $fila->descripcion; ?></td>
    
      <td><a href="#" class="btn btn-primary"
        data-toggle="modal" data-target="#mModificar<?php echo $fila->id; ?>">Modificar</a> </td>
      <td> <a href="" class="btn btn-primary"
        data-toggle="modal" data-target="#mEliminar<?php echo $fila->id; ?>">Eliminar</a> </td>
    </tr>

    <div class="modal fade" id="mEliminar<?php echo $fila->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Está seguro que desea eliminar la habitacion <?php echo $fila->numerohabitacion; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/habitaciones/eliminaHabitacion/<?php echo $fila->id; ?>">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mModificar<?php echo $fila->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <form class="" action="<?php echo base_url() ?>index.php/habitaciones/modificaUsuario/<?php echo $fila->id; ?>" method="post">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="">Numero habitacion</label>
            <input type="text" name="numerohabitacion" value="<?php echo $fila->numerohabitacion; ?>">
            <label for="">descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $fila->descripcion; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Modificar</button>
          </div>
        </div>
        </form>
      </div>
    </div>



    <?php

            }
          }
         ?>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
