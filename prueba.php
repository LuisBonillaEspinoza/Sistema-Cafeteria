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
      <a href="index1.php" class='btn btn-light'>Inicio</a>
      <a href="" class='btn btn-light'>Productos</a>
      <a href="cotizacion1.php" class='btn btn-light'>Cotizacion</a>
      <a href="carrito.php" class="btn btn-light">Carrito</a>
      <a  class='btn btn-light'><?php
      session_start();
	  echo $_SESSION['name'];
      ?></a>
      <a class='btn btn-light'><?php 
      if($_SESSION['puntos']==null){
          echo "0";
      }
      else{
          echo $_SESSION['puntos'];
      }
      ?></a>
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
					<form action="carrito.php" method="POST"><input type="hidden" name="pro" value="1" ><input name="pro1" type="number" size="7px" style="text-align: center;" value=""><br><div style="width:100%; height:100%">
						<input type="submit" name="caldo" value="Hacer Pedido"/>
				   </div>
				</form>
				   <?php 
                   if(isset($_POST['caldo'])){
                   $a = $_POST['proa'];
				   $_SESSION['prod']=$_POST['pro1'];
                   }
                   ?>
					
				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/juane.jpg"width="300" height="300" alt="" >
					<a href="#">Juane</a>
					<form action="<?php if(isset($_POST['juane'])){
						echo 'carrito.php';
					}
					else{
						echo '';}?>" method="post"><input type="hidden" name="pro" value="2"><input name="pro2" type="number" size="7px" style="text-align: center;" value=""><br><div style="width:100%; height:100%">
					<?php if(isset($_POST['juane'])){
					   
					   $_SESSION['prod'] = $_POST['pro2'];
					   $_SESSION["id"] = 14;
					   }
					   else{
						   echo 'error';
					   }
					   ?>
						<input type="submit" name="juane"/>
						
				   </div></form>

				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/pollo broaster.jpg"width="300" height="300" alt="" >
					<a href="#">Pollo Broaster</a>
					<form action="carrito.php" method="post"><input name="pro3" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="pollobro">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['pollobro'])){
                   $_SESSION['pro3'] = $_POST['pro3'];
                   $_SESSION['id'] = 3;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/te de curcuma.jpg"width="300" height="300" alt="" >
					<a href="#">Té de cúrcuma</a>
					<form action="carrito.php" method="post"><input name="pro4" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="tecu">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['tecu'])){
                   $_SESSION['pro4'] = $_POST['pro4'];
                   $_SESSION['id'] = 4;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/jugo de papaya.jpg"width="300" height="300" alt="" >
					<a href="#">Jugo de papaya</a>
					<form action="carrito.php" method="post"><input name="pro5" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="jupa">  HACER PEDIDO   </button>
				   </div></form>
                   <?php if(isset($_POST['jupa'])){
                   $_SESSION['pro5'] = $_POST['pro5'];
                   $_SESSION['id'] = 5;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/smothie de fresa.jpg"width="300" height="300" alt="" >
					<a href="#">Smoothie de fresa</a>
					<form action="carrito.php" method="post"><input name="pro6" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="smo">  HACER PEDIDO </button>
				   </div></form>
                   <?php if(isset($_POST['smo'])){
                   $_SESSION['pro6'] = $_POST['pro6'];
                   $_SESSION['id'] = 6;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/refresco de cocona.jpg"width="300" height="300" alt="" >
					<a href="#">Refresco de cocona</a>
					<form action="carrito.php" method="post"><input name="pro7" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="refre">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['refre'])){
                   $_SESSION['pro7'] = $_POST['pro7'];
                   $_SESSION['id'] = 7;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/frappe de mocca.jpg"width="300" height="300" alt="" >
					<a href="#">Frappé de moka</a>
					<form action="carrito.php" method="post"><input name="pro8" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="fra">  HACER PEDIDO </button>
				   </div></form>
                   <?php if(isset($_POST['fra'])){
                   $_SESSION['pro8'] = $_POST['pro8'];
                   $_SESSION['id'] = 8;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/frappé de vainilla.jpg"width="300" height="300" alt="" >
					<a href="#">Frappé de vainilla</a>
					<form action="carrito.php" method="post"><input name="pro9" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="frava">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['frava'])){
                   $_SESSION['pro9'] = $_POST['pro9'];
                   $_SESSION['id'] = 9;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/jugo de manzana.jpg"width="300" height="300" alt="" >
					<a href="#">Jugo de manzana</a>
					<form action="carrito.php" method="post"><input name="pro10" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="juma">  HACER PEDIDO </button>
				   </div></form>
                   <?php if(isset($_POST['juma'])){
                   $_SESSION['pro10'] = $_POST['pro10'];
                   $_SESSION['id'] = 10;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/chicha morada.jpg"width="300" height="300" alt="" >
					<a href="#">Chicha morada</a>
					<form action="carrito.php" method="post"><input name="pro11" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="chimo">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['chimo'])){
                   $_SESSION['pro11'] = $_POST['pro11'];
                   $_SESSION['id'] = 11;
                   }
                   ?>
				</div>
				<div class="product-item" category="postres">
					<img src="imagenes/arroz con leche.jpg"width="300" height="300" alt="" >
					<a href="#">Arroz con leche</a>
					<form action="carrito.php" method="post"><input name="pro12" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="arroz">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['arroz'])){
                   $_SESSION['pro12'] = $_POST['pro12'];
                   $_SESSION['id'] = 12;
                   }
                   ?>
				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/ensalada rusa.jpg"width="300" height="300" alt="" >
					<a href="#">Ensalada rusa</a>
					<form action="carrito.php" method="post"><input name="pro13" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="ensa">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['ensa'])){
                   $_SESSION['pro13'] = $_POST['pro13'];
                   $_SESSION['id'] = 13;
                   }
                   ?>
				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/porción de arroz blanco.jpg"width="300" height="300" alt="" >
					<a href="#">Porción de arroz blanco</a>
					<form action="carrito.php" method="post"><input name="pro14" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="porabla">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['porabla'])){
                   $_SESSION['pro14'] = $_POST['pro14'];
                   $_SESSION['id'] = 14;
                   }
                   ?>
				</div>
				<div class="product-item" category="porciones">
					<img src="imagenes/porción de arroz chaufa.jpg"width="300" height="300" alt="" >
					<a href="#">Porción de arroz chaufa</a>
					<form action="carrito.php" method="post"><input name="pro15" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="porarcha">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['porarcha'])){
                   $_SESSION['pro15 '] = $_POST['pro15'];
                   $_SESSION['id'] = 15;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/empanadas de yuca1.jpg"width="300" height="300" alt="" >
					<a href="#">Empanada de yuca</a>
					<form action="carrito.php" method="post"><input name="pro16" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="empa">  HACER PEDIDO   </button>
				   </div></form>
                   <?php if(isset($_POST['empa'])){
                   $_SESSION['pro16'] = $_POST['pro16'];
                   $_SESSION['id'] = 16;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan con palta.jpg"width="300" height="300" alt="" >
					<a href="#">Pan con palta</a>
					<form action="carrito.php" method="post"><input name="pro17" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="pan">  HACER PEDIDO   </button>
				   </div></form>
                   <?php if(isset($_POST['pan'])){
                   $_SESSION['pro17'] = $_POST['pro17'];
                   $_SESSION['id'] = 17;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan croissant.jpg"width="300" height="300" alt="" >
					<a href="#">Pan croissant</a>
					<form action="carrito.php" method="post"><input name="pro18" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="pancro">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['pancro'])){
                   $_SESSION['pro18'] = $_POST['pro18'];
                   $_SESSION['id'] = 18;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/pan-con-chicharron-de-cerdo.jpg"width="300" height="300" alt="" >
					<a href="#">Pan con chicharrón</a>
					<form action="carrito.php" method="post"><input name="pro19" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="pancon">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['pancon'])){
                   $_SESSION['pro19'] = $_POST['pro19'];
                   $_SESSION['id'] = 19;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/tamal.jpg"width="300" height="300" alt="" >
					<a href="#">Tamal</a>
					<form action="carrito.php" method="post"><input  name="pro20" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="tamal">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['tamal'])){
                   $_SESSION['pro20'] = $_POST['pro20'];
                   $_SESSION['id'] = 20;
                   }
                   ?>
				</div>
				<div class="product-item" category="platos">
					<img src="imagenes/tacacho-con-cecina.jpg"width="300" height="300" alt="" >
					<a href="#">Tacacho con cecina</a>
					<form action="carrito.php" method="post"><input name="pro21" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="taca">  HACER PEDIDO </button>
				   </div></form>
                   <?php if(isset($_POST['taca'])){
                   $_SESSION['pro21'] = $_POST['pro21'];
                   $_SESSION['id'] = 21;
                   }
                   ?>
				</div>
				<div class="product-item" category="aperitivos">
					<img src="imagenes/humita.jpg"width="300" height="300" alt="" >
					<a href="#">Humita</a>
					<form action="carrito.php" method="post"><input name="pro22" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button name="humi" type="button">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['humi'])){
                   $_SESSION['pro22'] = $_POST['pro22'];
                   $_SESSION['id'] = 22;
                   }
                   ?>
				</div>
				<div class="product-item" category="bebidas">
					<img src="imagenes/agua.jpg"width="300" height="300" alt="" >
					<a href="#">Agua de mesa</a>
					<form action="carrito.php" method="post"><input name="pro23" type="number" size="7px" style="text-align: center;" value="0"><br><div style="width:100%; height:100%">
						<button type="button" name="agua">  HACER PEDIDO  </button>
				   </div></form>
                   <?php if(isset($_POST['agua'])){
                   $_SESSION['pro23'] = $_POST['pro23'];
                   $_SESSION['id'] = 23;
                   }
                   ?>
				</div>
			</section>
		</div>
	</div>
</body>
</html>