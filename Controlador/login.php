<?php session_start();

if (!empty($_POST["btn_ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los campos estan vacios</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = hash('sha512', $_POST["password"]);
        $sql = $conexion->query(" SELECT * FROM socios WHERE nombre_completo='$usuario' and contraseña='$clave' ");
        if ($datos = $sql->fetch_object()) {
            //guardamos datos de la db para usar en funciones en otras paginas
            $_SESSION['id']=$datos->id;
            $_SESSION['nombre']=$datos->nombre_completo;
            $_SESSION['cooperativa_id']=$datos->cooperativa_id;
            header("location: home.php");
        } else {
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
        }
    }
}

?>