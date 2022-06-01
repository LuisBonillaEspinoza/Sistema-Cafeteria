<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<header>
      <h1 align='center'>CAFETERIA ANTEIKU</h1>      
    </header>    
    <nav class="navbar navbar-light bg-light">
     <div class="container-fluid">
      <img src="logo.jpg" alt="" width="100" height="100">
      <a href="" class='btn btn-light'>Inicio</a>
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
      <a href="session.php" class="btn btn-light">Cerrar Sesion</a>
      </div>
    </nav>
    <section class="products-list">
      <table class="table table-striped table-sm">
          <tr>
          <td>
          Codigo del Producto : 
          </td>
              <td>
                  Nombre del Producto :
              </td>
              <td>
                  Precio del Producto : 
              </td>
              <td>
                  Cantidad : 
              </td>
              <td>
                  Total : 
              </td>
          </tr>
<?php 
include 'conexion.php';

$pro = $con->query("select * from producto where produ_codigo_int='".$_POST['pro']."'");
if(!$pro){
    die("Error: ". $con->error);
}
if(isset($_SESSION['prod'])){
}
else{
    echo 'No se selecciono nigun producto';
}
while($row=$pro->fetch_array()){
    ?>
    <tr>
    <td>
    <?php $_SESSION['codigo'] = $row['produ_codigo_int'];
    echo $_SESSION['codigo'];
    ?>
    </td>
        <td>
            <?php echo $row['produ_nombre_string'];?>
        </td>
        <td>
            <?php echo $row['produ_precio_do'];?>
        </td>
        <td>
            <?php if(isset($_SESSION['prod'])){
echo $_SESSION['prod'];
}?>
        </td>
        <td>
            <?php 
             if(isset($_SESSION['prod'])){
                 ?>
                 
                 <?php
                $_SESSION['montofi'] = $_SESSION['prod']*$row['produ_precio_do'];
                echo $_SESSION['montofi'];
             }
                ?>
        </td>
    </tr>
    <?php
}
?>
<form method="post">
                <input type="submit" value="Comprar" name="comprar">

<?php 

                $pro = $con->query("select * from producto where produ_codigo_int='".$_SESSION['codigo']."'");
                $row = $pro->fetch_array();

?>
</form>

<?php  
include 'conexion.php';
if(isset($_POST['comprar'])){

$ultimoid= $con->query("SELECT MAX(pedido_cod_int)  FROM pedido");
$fila = mysqli_fetch_row($ultimoid);
$valor = $fila[0] + 1;
$pedido = $con->query("insert into pedido(pedido_cod_int) values ('".$valor."')");

$newpro = $row['produ_existencia_int'] - $_SESSION['prod'];
$con->query("update producto set produ_existencia_int='".$newpro."' where produ_codigo_int='".$_SESSION['codigo']."'");
$pedido1 = $con->query("update pedido set pedido_importeNeto_int='".$_SESSION['montofi']."', usuario_dni_string='".$_SESSION['dni']."' where pedido_cod_int = '".$valor."'");
$detalle = $con->query("insert into detalle(detalle_numcan_int,detalle_importebruto_do,produ_cod_int,pedido_cod_int) values ('".$_SESSION['prod']."','".$_SESSION['montofi']."','".$_SESSION['codigo']."','".$valor."')");
if(!$pedido1){
    echo "error en el pedido : " . $con->error;
}
else if(!$pedido){
    echo "el error es : " . $con->error;
}
else if(!$detalle){
    echo "el error es : " . $con->error;
}
else{
    header("location: confirmapago.php");
}
$fepe = $con->query("update pedido set pedido_fecha_date ='".date("Y-m-d")."' where pedido_cod_int = '".$valor."'");
if(!$fepe){
    echo "error en ingreso de fecha : " . $con->error;
}
}
?>
      </table>
    </section>
</body>
</html>