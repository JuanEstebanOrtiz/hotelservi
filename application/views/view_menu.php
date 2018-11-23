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
			background: blue;
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
				<div class="ui-block-a margin">
					<div data-role="navbar">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>index.php/inicio/usu_servicios" data-ajax="false">Servicios</a>
								<div class="hover c-1"></div>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/principal/usu_contacto" data-ajax="false">Contactos</a>
								<div class="hover c-2"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="ui-block-b">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         				 <img src="<?php echo base_url(); ?>imagenes/user.png" alt="">
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/principal/index" data-ajax="false">Inicio</a>
         				<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/principal/ingreso" data-ajax="false">Iniciar Sesi&oacute;n</a>
          				<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cuentas/index_ingreso" data-ajax="false">Inidddciar Sesi&oacute;n</a>
        			</div>
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