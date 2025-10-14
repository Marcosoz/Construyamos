<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios</title>
    <!-- CSS ONLY class="col-8 p-4" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ade5209d09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/tablestyle.css">
</head>

<body>
    <h1 class="text-center p-3">Socios</h1>
    <div class="container-flex">
        <a class="btn btn-primary" href="home.php" role="button">Inicio</a>

        <a class="btn btn-secondary" href="agregarSocio.php" role="button">Agregar Socio</a>

    <div class="container-fluid row">
        <div>
            <table class="table_2">
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
                    $sql = $conexion->query("SELECT id, nombre_completo, cedula, telefono, email, fecha_ingreso, cupo FROM socios");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->nombre_completo ?></td>
                            <td><?= $datos->cedula ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->fecha_ingreso ?></td>
                            <td><?= $datos->cupo ?></td>
                            <td>
                                <!-- Notar la variable id que viene de datos, queda creada en el momento de llamar al boton -->
                                <a href="modificar_socios.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-user-pen"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    </div>

    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
<!-- ultimo trabajo: se agregan nombres a los input -->