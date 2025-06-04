<?php
    require_once("c://xampp/htdocs/login/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $correo = $obj->limpiarcorreo($_POST['correo']);
    $contraseña = $obj->limpiarcadena($_POST['contraseña']);
    $bandera = $obj->verificarusuario($correo,$contraseña);
    if($bandera){
        $usuario = $obj->obtenerUsuario($correo);
$_SESSION['usuario'] = $usuario['correo'];
$_SESSION['usuario_id'] = $usuario['id'];
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>