<?php

include "Modelo/conexion.php";
include "Controlador/editar_socios.php";

$id = $_GET["id"];
$sql = $conexion->query("SELECT id, cooperativa_id, nombre_completo, cedula, telefono, email, contraseña, fecha_ingreso, nivel_usuario, cupo FROM socios WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid row">
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center alert alert-secondary">Modificar Socios</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php

            while ($datos = $sql->fetch_object()) { ?>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label" hidden>Cooperativa ID</label>
                    <input type="hidden" id="disabledTextInput" class="form-control" name="cooperativaID" value="<?= $datos->cooperativa_id ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nombre completo</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nombre" value="<?= $datos->nombre_completo ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Documento</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="documento" value="<?= $datos->cedula ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Telefono</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="email" value="<?= $datos->email ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Clave de acceso</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="clave" value="<?= $datos->contraseña ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Fecha de ingreso</label>
                    <input type="date" id="disabledTextInput" class="form-control" name="fecha_ingreso" value="<?= $datos->fecha_ingreso ?>">
                </div>
                <!--                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault" name="socio_si[]" value="">
                    <label class="form-check-label" for="checkDefault">
                        Socio Si
                    </label>
                </div> -->
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Nivel de usuario</label>
                    <select id="disabledSelect" class="form-select" name="nivel_usuario" value="<?= $datos->nivel_usuario ?>">
                        <option value=1>Administrador</option>
                        <option value=2>socio</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Cupo</label>
                    <select id="disabledSelect" class="form-select" name="cupo" value="<?= $datos->cupo ?>">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            <?php }

            ?>

            <button type="submit" class="btn btn-success" name="btn_editar_socio" value="ok">Aceptar</button>
            <a href="socios.php">
                <button class="btn btn-danger" name="btn_editar_socio" value="ok">Cancelar</button> <!-- Boton realizado dentro del enlace -->
            </a>
        </form>
</body>

</html>