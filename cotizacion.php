<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cotizacion</title>

	<link rel="stylesheet" href="estilos2.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/suma.js"></script>
</head>
<body>
<header>
      <h1 align='center' style="background-color:peru;">CAFETERIA ANTEIKU</h1>      
    </header>    
<nav class="navbar navbar-light bg-light">
     <div class="container-fluid">
      <img src="logo.jpg" alt="" width="100" height="100">
      <a href="index.php" class='btn btn-light'>Inicio</a>
      <a href="" class='btn btn-light'>Productos</a>
      <a href="cotizacion.php" class='btn btn-light'>Cotizacion</a>
      <a href="login.php" class='btn btn-light'>LOGIN</a>
      <a href="registro.php" class='btn btn-light'>REGISTRARSE</a>
      </div>
    </nav>
	<div class="wrap">
		<h1>COTIZACIÓN</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="bebidas">Bebidas</a>
				<a href="#" class="category_item" category="platos">Platos</a>
				<a href="#" class="category_item" category="porciones">Porciones</a>
				<a href="#" class="category_item" category="postres">Postres</a>
				<a href="#" class="category_item" category="aperitivos">Aperitivos</a>
			</div>
			<section class="products-list">
			<div class="product-item" category="platos">
					<img src="imagenes/caldo-de-gallina.jpg"width="300" height="300" alt="" >
					<a href="#">Caldo de gallina</a>
					
				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/juane.jpg"width="300" height="300" alt="" >
					<a href="#">Juane</a>
					
				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/pollo broaster.jpg"width="300" height="300" alt="" >
					<a href="#">Pollo Broaster</a>
			
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/te de curcuma.jpg"width="300" height="300" alt="" >
					<a href="#">Té de cúrcuma</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/jugo de papaya.jpg"width="300" height="300" alt="" >
					<a href="#">Jugo de papaya</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/smothie de fresa.jpg"width="300" height="300" alt="" >
					<a href="#">Smoothie de fresa</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/refresco de cocona.jpg"width="300" height="300" alt="" >
					<a href="#">Refresco de cocona</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/frappe de mocca.jpg"width="300" height="300" alt="" >
					<a href="#">Frappé de moka</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/frappé de vainilla.jpg"width="300" height="300" alt="" >
					<a href="#">Frappé de vainilla</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/jugo de manzana.jpg"width="300" height="300" alt="" >
					<a href="#">Jugo de manzana</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/chicha morada.jpg"width="300" height="300" alt="" >
					<a href="#">Chicha morada</a>

				</div>
				<div class="product-item" category="postres">
					<img src="imagenes/arroz con leche.jpg"width="300" height="300" alt="" >
					<a href="#">Arroz con leche</a>

				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/ensalada rusa.jpg"width="300" height="300" alt="" >
					<a href="#">Ensalada rusa</a>

				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/porción de arroz blanco.jpg"width="300" height="300" alt="" >
					<a href="#">Porción de arroz blanco</a>

				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/porción de arroz chaufa.jpg"width="300" height="300" alt="" >
					<a href="#">Porción de arroz chaufa</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/empanadas de yuca1.jpg"width="300" height="300" alt="" >
					<a href="#">Empanada de yuca</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan con palta.jpg"width="300" height="300" alt="" >
					<a href="#">Pan con palta</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan croissant.jpg"width="300" height="300" alt="" >
					<a href="#">Pan croissant</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan-con-chicharron-de-cerdo.jpg"width="300" height="300" alt="" >
					<a href="#">Pan con chicharrón</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/tamal.jpg"width="300" height="300" alt="" >
					<a href="#">Tamal</a>

				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/tacacho-con-cecina.jpg"width="300" height="300" alt="" >
					<a href="#">Tacacho con cecina</a>

				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/humita.jpg"width="300" height="300" alt="" >
					<a href="#">Humita</a>

				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/agua.jpg"width="300" height="300" alt="" >
					<a href="#">Agua de mesa</a>

				</div>
			</section>
		</div>
	</div>
	<?php
	include 'conexion.php';

	?>
</body>
</html>