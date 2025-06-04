<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    
?>
<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php if(empty($_SESSION['usuario'])): ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                    </ul>
                    <a href="/login/view/home/login.php" class="boton">Inicia Session</a>
                    <a href="/login/view/home/signup.php" class="boton">Registrate</a>
                </div>
                </nav>
                <h1 class="saludo">Bienvenidos al ¡Mejor gestor de tareas personales!</h1>
        
        <div class="carousel">
  <input type="radio" name="carousel" id="slide1" checked>
  <input type="radio" name="carousel" id="slide2">
  <input type="radio" name="carousel" id="slide3">
  
  <div class="slides">
    <label for="slide1" class="slide">
      <img src="https://wallpapers.com/images/featured/gestion-de-proyectos-wfbuewoquiigeuht.webp" alt="Imagen 1">
      <span class="caption">¡Gestiona tus tareas y proyectos con la mejor pagina!</span>
    </label>
    <label for="slide2" class="slide">
      <img src="https://wallpapers.com/images/hd/project-management-tools-illustration-20vwwkbworhkpzff.jpg" alt="Imagen 2">
      <span class="caption">Para una mayor eficiencia en tus actividades</span>
    </label>
    <label for="slide3" class="slide">
      <img src="https://www.onplusformacion.com/wp-content/uploads/2021/01/u4_inicio.gif" alt="Imagen 3">
      <span class="caption">y para el mejor desempeño posible</span>
    </label>
  </div>
  
  <div class="controls">
    <label for="slide1" class="control"></label>
    <label for="slide2" class="control"></label>
    <label for="slide3" class="control"></label>
  </div>
                <?php else: ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../home/sesion.php">Agregar Tarea</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Session de recursos</a>
                        </li>
                    </ul>
                    <a href="/login/view/home/logout.php" class="boton">Cerrar Sesion</a>
                </div>
                
                <?php endif ?>

            </div>
        
</div>
    </div>
</div>

<div class="fondo">

