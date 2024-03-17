<?php 
$pg ="contacto"; 

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
            <div class="col-12 pt-5 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me envies un mensaje o te contactes por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribir aqui"></textarea>
                    </div>
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">Enviar</button>
                </form>
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