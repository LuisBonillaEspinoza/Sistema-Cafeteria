
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Pagar</title>

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
    <?php session_start();
?>
  </head>
  <body class="bg-light">
  
    <form method="post" action="enviogmail.php">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.jpg" alt="" width="90" height="90">
      <h2>Pago</h2>
      <p class="lead">Ingrese los Datos de la Tarjeta</p>
    </div>

    <div class="row g-5">
            <div class="col-sm-6">
              <label for="lastName" class="form-label">N° de Tarjeta</label>
              <input type="text" class="form-control" id="lastName" name="nro" placeholder="" value="" required>
              <div class="invalid-feedback">
                Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Titular</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" name="titular" placeholder="" required>
              <div class="invalid-feedback">
                  Requerido
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Fecha de Caducidad</label>
              <input type="date" class="form-control" id="address" name="fecha" placeholder="" required>
              <div class="invalid-feedback">
                Requerido
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">CV </label>
              <input type="text" class="form-control" id="address2" name="cv" required>
            </div>

          <hr class="my-4">
            <input class="w-100 btn-primary btn-lg" type="submit" name="validar" value="Validar Tarjeta">
            
          <input class="w-100 btn btn-primary btn-lg" type="submit" name="pagar" value="Pagar"></button>
        </form action="verboleta.php">
        <?php 
            if(isset($_POST['validar'])){
                $nro = $_POST['nro'];
                $nombre = $_POST['titular'];
                $fecha = $_POST['fecha'];
                $cv = $_POST['cv'];
                include 'conexion.php';
                $tar = $con->query("select * from tarjeta where tarjeta_num_cod='".$nro."'");

                if(!$tar){
                    echo '<script language="javascript">';
                    echo 'alert("Numero de Tarjeta Invalido")';
                    echo '</script>';
                }
            else{

                $row=$tar->fetch_array();
                if($row['tarjeta_num_cod']==$nro && $row['tarjeta_txt_titular']==$nombre && $row['tarjeta_date_fechaCaducidad']==$fecha && $row['tarjeta_integer_cvv']==$cv){
                    if(isset($_SESSION['montofi'])){
                                        }
                                        else{
                                            echo 'No existe la variable';
                                        }
                
                                        echo '<script language="javascript">';
                                        echo 'alert("Datos correctos")';
                                        echo '</script>';
                                                            }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Datos incorrectos")';
                    echo '</script>';
                }
            }
            }
            ?>
            <?php
            if(isset($_POST['titular'])){
                include 'conexion.php';
                $nro = $_POST['nro'];
                $tar = $con->query("select * from tarjeta where tarjeta_num_cod='".$nro."'");
                $row = $tar->fetch_array();
                if($row['tarjeta_saldo_double']>=$_SESSION['montofi']){
                    $pagobru = $row['tarjeta_saldo_double'] -$_SESSION['montofi'];
                    $cam = $con->query("update tarjeta set tarjeta_saldo_double='".$pagobru."' where tarjeta_num_cod='".$nro."'");
                    if(!$cam){
                        echo "error en : " . $con->error;
                    }
                    $puntos = (int) $pagobru/2;
                    if(isset($_SESSION['dni'])){
                    $con->query("update usuario set user_puntos_do='".$puntos."' where user_dni_txt='".$_SESSION['dni']."'");
                    echo "aea";
                    $ultimoid= $con->query("SELECT MAX(pedido_cod_int)  FROM pedido");
$fila = mysqli_fetch_row($ultimoid);

                $con->query("update pedido set tarjeta_numero_string='".$_POST['nro']."' where pedido_cod_int='".$fila[0]."'");
                }}
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Saldo insuficiente")';
                    echo '</script>';
                }
                
            }
            ?>
      </div>
    </div>
  </main>
</div>
</form>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
