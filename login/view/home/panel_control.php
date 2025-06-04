<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
<body class="fondopanel">
    <h1 class="text-bien">Bienvenido seas: <?= $_SESSION['usuario']?></h1>
    <p>¡COMIENZA AGREGAR TUS TAREAS PARA QUE PUEDAS GESTIONARLAS!</p>
    <div class="contenedor-boton">
    <a href="./sesion.php" class="btn-central">Agregar tareas</a>
</div>
</body>
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
