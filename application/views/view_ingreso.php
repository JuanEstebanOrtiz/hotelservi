<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .grid div:first-child img{
            width: 100%;
            height: 500px;
        }

        h2{
            color: blue;
            margin-left: 9%;
        }

        .hola{
            border-top: 0;
        }
    </style>
</head>
<body>
    <div data-role="main">
        <div class="ui-grid-a grid">
            <div class="ui-block-a">
                <img src="<?php echo base_url(); ?>imagenes/playa.jpg" alt="" >
            </div>
            <div class="ui-block-b">
                <form action="<?php echo base_url(); ?>index.php/principal/validaAcceso" method="POST" data-ajax="false">
                    <label for="">Usuario: </label>
                    <input type="text" name="user">
                    <label for="">Contraseña: </label>
                    <input type="password" name="pass">
                    <input type="submit" value="Ingresar">
                </form>
        </div>
    </div>
</body>
</html>