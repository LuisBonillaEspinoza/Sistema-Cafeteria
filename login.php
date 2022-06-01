
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form method="POST">
    <img class="mb-4" src="logo.jpg" alt="" width="100%" height="100%">
    <h1 class="h3 mb-3 fw-normal">Ingrese los Siguientes Datos</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="74129285" name="dni">
      <label for="floatingInput">Dni</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <center>
<div class="btn-group">
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="Ingreso">Ingrese</button>
    <a href="index.php"><input type="button" value="Atras" class="w-100 btn btn-lg btn-warning"></a>

</div>
    </center>
<p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
  <?php  include 'conexion.php';

  session_start();
  if(isset($_POST['Ingreso'])){
    error_reporting(0);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    $pas = mysqli_real_escape_string($con,$_POST['password']);
    $query = $con->query("select * from usuario where user_dni_txt='" . $dni ."' and user_contrasenia_string='".$pas."'");

    while($row=$query->fetch_array()){
      $_SESSION['dni'] = $row['user_dni_txt'];
      $_SESSION['name'] = $row['user_nombre_string'];
      $_SESSION['puntos'] = $row['user_puntos_do'];
        if($row['rol_cod_int']=="1"){
 ?>         
<script language="javascript">
alert("Bienvenido Admi");
</script>
<?php
            header("location: admi.php");
            $error="aea";
        }
        else if($row['rol_cod_int']=="2"){
?>            
<script language="javascript">
alert("Bienvenido Cliente");
</script>
<?php
            header("location: index1.php");
            $error="aea";
        }
        else{
            $error = "Datos Erroneos";
        }
    }}
    ?>
        <?php 
error_reporting(0);
    echo $error;?>
</main>    
  </body>
</html>
