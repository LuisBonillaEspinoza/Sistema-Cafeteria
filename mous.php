<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Registro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <form method="POST" action="<?php if(isset($_POST['registro'])){
      echo "admi.php";
    }
    else{
      echo "";
    }?>">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.jpg" alt="" width="20%" height="20%">
      <h2>Registro</h2>
      <p class="lead">Ingrese los Siguientes Datos a Modificar</p>
    </div>

    <div class="row g-5">
      <div class="col-md-16">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="<?php 
              include 'conexion.php';
              session_start();
              $cous = $con->query("select * from usuario where user_dni_txt='". $_GET['id']."'");
              while($row=$cous->fetch_array()){
                  echo $row['user_nombre_string'];
              }
              ?>" required name="nom">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Email</label>
              <input type="email" class="form-control" id="lastName" placeholder="" value="<?php
              $desus = $con->query("select * from usuario where user_dni_txt='". $_GET['id']."'");
              while($row1=$desus->fetch_array()){
                echo $row1['user_email_string'];
              }
              ?>" required name="des">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Telefono</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" id="username" placeholder="" required name="exis" value="<?php 
                $exisus = $con->query("select * from usuario where user_dni_txt='". $_GET['id']."'");
                while($row2=$exisus->fetch_array()){
                  echo $row2['user_telefono_string'];
                }
                ?>">
              <div class="invalid-feedback">
                  Campo Requerido
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="email" placeholder="" required name="pre" value="<?php
              $precious= $con->query("select * from usuario where user_dni_txt='". $_GET['id']."'");
              while($row3=$precious->fetch_array()){
                echo $row3['user_direccion_string'];
              }
              ?>">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Contraseña</label>
              <input type="text" class="form-control" id="email" placeholder="" required name="Tipo" value="<?php
              $precious= $con->query("select * from usuario where user_dni_txt='". $_GET['id']."'");
              while($row3=$precious->fetch_array()){
                echo $row3['user_contrasenia_string'];
              }
              ?>">
              <div class="invalid-feedback">
                Campo Requerido
              </div>
            </div>
            <div class="d-grid gap-2" >
          <button class="btn btn-primary btn-lg btn-sucess" type="submit" name="registro">Modificar</button>
          <a href="productos.php"><input type='button' value='Atras' class="w-100 btn btn-primary btn-lg btn-warning"></a>
      </div>
      </div>
    </div>
    </form>
  </main>

    <?php
    include 'conexion.php';
if(isset($_POST['registro'])){
    error_reporting(0);
    $nom  = utf8_decode($_POST['nom']);
    $des = utf8_decode($_POST['des']);
    $exis = utf8_decode($_POST['exis']);
    $pre = utf8_decode($_POST['pre']);
    $tipo = utf8_decode($_POST['Tipo']);

if($con==null){
  echo 'error';
}
    $pro = $con->query("update usuario set user_nombre_string='".$nom."', user_email_string='".$des."', user_telefono_string='".$exis."', user_direccion_string='".$pre."', user_contrasenia_string='".$tipo."' where user_dni_txt='".$_GET['id']."'");

    if(!$pro){
        die("Error : ". $con->error );
    }
    else{
        echo '<script language="javascript">';
echo 'alert("Registrado Correctamente")';
echo '</script>';
    }
}
    ?>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Anteiku</p>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
