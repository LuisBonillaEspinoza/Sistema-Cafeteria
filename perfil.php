<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Título de la WEB</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
    <link rel="stylesheet" href="estilos.css">
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
      <a  class='btn btn-light' href="perfil.php"><?php
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
    <section>     
      <article  align='center'>
       <h1>Datos del usuario</h1>

      </article>      
    </section>
    
    <br>
    <br>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body> 

</html>