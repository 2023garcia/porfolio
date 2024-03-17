<?php
$pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>
                    Gracias por contactarte.
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <p>Te estare respondiendo a la brevedad.</p>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:garciamariano.nicolas1@gmail.com">garciamariano.nicolas1@gmail.com</a>
            </div>
            <div class="col-3">
                <div class="btn-whatsapp"><a href="https://wa.me/2901473443" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i></a></div>
            </div>
        </div>
    </footer>
</body>

</html>