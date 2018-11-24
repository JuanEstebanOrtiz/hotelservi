<form class="" action="<?php echo base_url() ?>index.php/pedidos/agregaPedidos_Cliente" method="post">

<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Agregar Pedido</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <input type="text" name="nombre" value="" placeholder="Digite su pedido">

    <input type="text" name="descripcion" value="" placeholder="Haga una breve descripcion">
    <input type="number" name="habitacion" value="" placeholder="digite numero de habitacion">



  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</div>
</form>