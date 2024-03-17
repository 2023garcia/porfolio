<?php 
$pg ="inicio"; 

?>


<!DOCTYPE html>
<html lang="es" class="h-100">

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

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                    <p class="px-5 py-2">Bienvenidos a mi sitio web de desarrollo de sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
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