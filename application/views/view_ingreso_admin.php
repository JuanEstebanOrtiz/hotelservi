<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/admin/validarAdmin" method="POST" data-ajax="false">
        <label for="">Usuario:</label>
        <input type="text" name="user">
        <label for="">Contraseña</label>
        <input type="password" name="pass">
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>