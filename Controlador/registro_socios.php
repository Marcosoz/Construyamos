<?php
//validacion de los datos ingresados
if (!empty($_POST["btn_registro"])) {
    if (
        !empty($_POST["cooperativaID"]) and !empty($_POST["nombre"]) and !empty($_POST["documento"]) and !empty($_POST["telefono"]) and
        !empty($_POST["email"]) and !empty($_POST["clave"]) and !empty($_POST["fecha_ingreso"]) and
        //!empty($_POST["socio_si"]) and 
        !empty($_POST["nivel_usuario"]) and !empty($_POST["cupo"])
    ) {
        //echo "Datos ingresados correctamente";
        $cooperativaID = $_POST["cooperativaID"];
        $nombre = $_POST["nombre"];
        $documento = $_POST["documento"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $clave = hash('sha512', $_POST["clave"]);
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
        $sql = $conexion->query(" INSERT INTO socios(cooperativa_id, nombre_completo, cedula, telefono, email, contraseña, fecha_ingreso, nivel_usuario, cupo)values('$cooperativaID', '$nombre', '$documento', '$telefono', '$email', '$clave', '$fecha_ingreso', '$nivel_usuario', '$cupo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Socio registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar socio</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
