<?php session_start();
if (empty($_SESSION['id'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets-index/css/styles.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Construyamos</title>
</head>

<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo"></a>
                    <?php
                    echo $_SESSION['nombre'];
                    ?>
                </div>
                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="#" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Recordatorios</span>
                    </a>

                    <div class="nav__link collapse">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Administracion</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="#" class="collapse__sublink">Pagos</a>
                            <a href="#" class="collapse__sublink">Compras</a>
                            <a href="#" class="collapse__sublink">Ingresos</a>
                            <a href="#" class="collapse__sublink">Calendario</a>
                        </ul>
                    </div>

                    <div class="nav__link collapse">
                        <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Socios</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="socios.php" class="collapse__sublink">Socios</a>
                            <a href="#" class="collapse__sublink">Horas Trabajadas</a>
                        </ul>
                    </div>
                    <div class="nav__link collapse">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Configuracion</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="#" class="collapse__sublink">Proveedor</a>
                            <a href="#" class="collapse__sublink">Pagos</a>
                            <a href="#" class="collapse__sublink">Ingresos</a>
                        </ul>
                    </div>

                    <a href="#" class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Pruebas</span>
                    </a>
                </div>
            </div>

            <a href="controlador/logout.php" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Cerrar Sesion</span>
            </a>
        </nav>
    </div>

    <style> /* cuando haya tiempo pasar a style.css clase imgconstruyamos*/
        body {
            /* La ruta a tu imagen */
            background-image: url('img/construyamos.jpg');
            /* Ajusta el tamaño para que cubra toda la pantalla */
            background-size: cover;
            /* Evita que la imagen se repita */
            background-repeat: no-repeat;
            /* Centra la imagen */
            background-position: center;
            /* Fija la imagen al hacer scroll */
            background-attachment: fixed;
        }
    </style>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets-index/js/main.js"></script>
</body>

</html>