<?php

if (!empty($_POST["btn_ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los campos estan vacios</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $sql = $conexion->query(" SELECT nombre_completo, contraseña FROM socios WHERE nombre_completo='$usuario' and contraseña='$clave' ");
        if ($datos = $sql->fetch_object()) {
            header("location:index.html");
        } else {
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
        }
    }
}