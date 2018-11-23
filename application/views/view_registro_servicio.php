<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .img{
            width: 100%;
            height: 500px;
        }

    </style>
</head>
<body>
<div data-role="main">
        <div class="ui-grid-a grid">
            <div class="ui-block-a">
                <img src="<?php echo base_url(); ?>imagenes/img-reserva1.jpg" class="img" alt="" >
            </div>
            <div class="ui-block-b">
                <form action="<?php echo base_url(); ?>index.php/reserva/registroServicio" method="POST" data-ajax="false">
                    <label for="">Numero de Habitacion:</label>
                    <input type="number" name="room">
                    <label for="">Descripcion del servicio: </label>
                    <textarea name="desc" id="" cols="30" rows="50"></textarea>
                    <input type="submit" value="Pedir Servicio">
                </form>
        </div>
    </div>
</body>
</html>