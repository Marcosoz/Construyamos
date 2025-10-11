<?php
//validacion de los datos ingresados
if (!empty($_POST["boton_registro"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["documento"]) and !empty($_POST["telefono"]) and
        !empty($_POST["email"]) and !empty($_POST["clave"]) and !empty($_POST["fecha_ingreso"]) and
        !empty($_POST["socio_si"]) and !empty($_POST["nivel_usuario"])
    ) {
        echo "Datos ingresados correctamente";
    } else {
        echo "Alguno de los campos esta vacio";
    }
}
?>