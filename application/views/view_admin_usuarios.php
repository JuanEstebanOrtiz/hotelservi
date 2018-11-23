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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($user as $fila){
            ?>
                <tr>
                    <td><?php echo $fila->nombre; ?></td>
                    <td><?php echo $fila->apellido; ?></td>
                    <td><?php echo $fila->correo; ?></td>
                    <td><?php echo $fila->usuario; ?></td>
                    <td><?php echo $fila->contrasena; ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/datos/eliminarUsuario/<?php echo $fila->id; ?>" data-ajax="false">Eliminar</a></td>
                    <td><a href="<?php echo base_url(); ?>/<?php echo $fila->id; ?>" data-ajax="false">Modificar</a></td>
                </tr>
            <?php
            }
            ?>
            
            
        </tbody>
    </table>
</body>
</html>