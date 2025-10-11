<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios</title>
    <!-- CSS ONLY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ade5209d09.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Socios</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3">
                <legend class="text-center text-secundary">Ingreso de socios</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nombre completo</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Documento</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="documento">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Telefono</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Clave de acceso</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="clave">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Fecha de ingreso</label>
                    <input type="date" id="disabledTextInput" class="form-control" name="fecha_ingreso">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault" name="socio_si">
                    <label class="form-check-label" for="checkDefault">
                        Socio Si
                    </label>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Nivel de usuario</label>
                    <select id="disabledSelect" class="form-select" name="nivel_usuario">
                        <option>Nivel de usuario</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Cupo</label>
                    <select id="disabledSelect" class="form-select" name="cupo">
                        <option>Cupo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Cupo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT nombre_completo, cedula, telefono, email, fecha_ingreso, cupo FROM socios");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->nombre_completo ?></td>
                            <td><?= $datos->cedula ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->fecha_ingreso ?></td>
                            <td><?= $datos->cupo ?></td>
                            <td>
                                <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-user-pen"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>



    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
<!-- ultimo trabajo: se agregan nombres a los input -->