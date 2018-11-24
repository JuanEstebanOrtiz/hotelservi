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
            background: green;
        }

        .boton h3{
            text-align: center;
            font-size: 40px;
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
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/restaurante.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/principal/cliente_pedido" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>RESTAURANTE</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="ui-block-b">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/picina.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/principal/cliente_pedido" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>PISCINA</h3>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/wifi.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/principal/cliente_pedido" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>RED WIFI LIMITADA</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="ui-block-b">
                <div class="box">
                    <div class="img">
                        <img src="<?php echo base_url(); ?>imagenes/img-reserva2.jpg" alt="">
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/principal/cliente_pedido" data-ajax="false" class="link">
                    <div class="boton">
                       <h3>BAR</h3>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>