<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table" data-ajax="false">
        <thead>
            <tr>
                <th>Habitacion</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($servicio as $fila){
            ?>
                <tr>
                    <td><?php echo $fila->room; ?></td>
                    <td><?php echo $fila->descripcion; ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/datos/eliminarServicio/<?php echo $fila->id; ?>" data-ajax="false">Eliminar</a></td>
                    <td><a href="<?php echo base_url(); ?>index.php/datos/editarRoom/<?php echo $fila->id; ?>" data-ajax="false">Modificar</a></td>
                </tr>
            <?php
            }
            ?>
            
            
        </tbody>
    </table>
</body>
</html>