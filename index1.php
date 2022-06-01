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
        <h5>DELICIAS DEL DIA</h5>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/cafe1.jpg" class="d-block w-100" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/cafe2.jpg" class="d-block w-100" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/cafe3.jpg" class="d-block w-100" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/cafe4.jpg" class="d-block w-100" width="500" height="500">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </article>      
    </section>
    <aside align='center'>
      <p>El precio se olvida la calidad se recuerda</p>
      <img src="anteiku.png" alt="paisaje" width='300' height='490'>  
    </aside>
    <br>
    <br>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body> 

</html>