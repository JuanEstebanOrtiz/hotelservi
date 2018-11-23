<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box{
            width: 100%;
            height: 400px;
        }

        .box .img{
            width: 100%;
            height: 350px;
        }

        .box .img img{
            width: 100%;
            height: 350px;
        }

        .box .boton{
            width: 100%;
            height: 50px;
            background: rgba(0,120,30,0.6);
        }

        .boton h3{
            text-align: center;
            font-size: 20px;
            font-family: "Arial";
            color: #fff;
        }

        .boton{
            display: none;
        }

        .box:hover .boton{
            display: block;
        }

        .link:hover{
            text-decoration: none;
        }

        .link .boton h3{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div data-role="main">
        <div class="ui-grid-b">
            <div class="ui-block-b">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/img-reserva1.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/reserva/home" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>HABITACIONES RESERVADAS</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="ui-block-b">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/img-reserva2.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/reserva/home2" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>SERVICIOS PENDIENTES</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="ui-block-c">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/user_admin.png" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/cuentas/home" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>USUARIOS REGISTRADOS</h3>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>