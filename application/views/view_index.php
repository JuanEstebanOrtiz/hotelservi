<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .cont div img{
            width: 100px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div data-role="main">
        <!-- SLIDER BOOSTRAP --> 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url(); ?>imagenes/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>imagenes/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>imagenes/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- MAS INFORMACION DEL HOTEL -->
<div class="row main">
  <div class="col-4 cont">
    <div class="img"><img src="<?php echo base_url(); ?>imagenes/main1.png" alt=""></div>
    <div class="text"><p>Somos el hotel por exelencia para que tengas el mejor servicio para su propia comodidad</p></div>
  </div>
  <div class="col-4 cont">
    <div class="img"><img src="<?php echo base_url(); ?>imagenes/main2.png" alt=""></div>
    <div class="text"><p>Estamos ubicados cerca en los centros turisticos del pais para una mayor facilidad para encontrar el destino</p></div>
  </div>
  <div class="col-4 cont">
    <div class="img"><img src="<?php echo base_url(); ?>imagenes/main3.png" alt=""></div>
    <div class="text"><p>Te ofrecemos un restaurante exclusivo del hotel con desayuno incluido para te sientas en casa</p></div>
  </div>
</div>
    </div>
    </div>
</body>
</html>