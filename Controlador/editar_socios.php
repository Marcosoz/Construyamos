<?php
//validacion de los datos ingresados
if (!empty($_POST["btn_editar_socio"])) {
    if (
        !empty($_POST["cooperativaID"]) and !empty($_POST["nombre"]) and !empty($_POST["documento"]) and !empty($_POST["telefono"]) and
        !empty($_POST["email"]) and !empty($_POST["clave"]) and !empty($_POST["fecha_ingreso"]) and
        //!empty($_POST["socio_si"]) and 
        !empty($_POST["nivel_usuario"]) and !empty($_POST["cupo"])
    ) {
        $id = $_POST["id"];
        $cooperativaID = $_POST["cooperativaID"];
        $nombre = $_POST["nombre"];
        $documento = $_POST["documento"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $clave = $_POST["clave"];
        $fecha_ingreso = $_POST["fecha_ingreso"];
        // $socio_si = $_POST["socio_si"];
        $nivel_usuario = $_POST["nivel_usuario"];
        $cupo = $_POST["cupo"];
/*
        // verificacion de la casilla socio si
        if (isset($_POST["socio_si"])) {
            $socio_si="1";
        } else {
            $socio_si="0";
        }
*/
        // NOTA: Se elimina socio_si para hacer pruebas porque no funciona
        $sql = $conexion->query(" UPDATE socios SET cooperativa_id=$cooperativaID, nombre_completo='$nombre', cedula='$documento', telefono='$telefono', email='$email', contraseña='$clave', fecha_ingreso='$fecha_ingreso', nivel_usuario='$nivel_usuario', cupo=$cupo WHERE id=$id " );
        if ($sql == 1) {
            header("location:socios.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar socio</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}