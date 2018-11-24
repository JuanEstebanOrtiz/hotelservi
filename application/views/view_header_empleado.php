<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<style>
		.hover{
			width: 100%;
			height: 5px;
			display: none;
		}

		.c-1{
			background: aqua;
		}

		.c-2{
			background: rgba(0,0,150,1);
		}

		.c-3{
			background: green;
		}

		ul li:hover .hover{
			display: block;
		}

		.banner{
			display: block;
			margin: 0 auto;
		}

		.margin{
			margin-top: 22px;
		}
		
	</style>
</head>
<body>
		<div data-role="main">
			<img src="<?php echo base_url(); ?>imagenes/banner.jpg" class="banner" alt="">
			<div class="ui-grid-a">
				
					<div data-role="navbar">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>index.php/reservas/vistAdmiReservas_empleado" data-ajax="false">Reservas</a>
								<div class="hover c-2"></div>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>index.php/pedidos/vistAdmiPedidos_empleado" data-ajax="false">Pedidos</a>
								<div class="hover c-2"></div>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>index.php/habitaciones/vistAdmiHabitaciones_empleado" data-ajax="false">Habitaciones</a>
								<div class="hover c-2"></div>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>index.php/principal/index" data-ajax="false">Salir</a>
								<div class="hover c-1"></div>
							</li>
						</ul>
					</div>
				
				
			</div>
		</div>
	<script src="<?php echo base_url(); ?>jquery.mobile/demos/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/demos/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>