<?php 
$pg ="sobre-mi"; 

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>Sobre mí</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-8 mt-5">
                    <p>Desarrollador web Full Stack, Martillero Público y Corredor Inmobiliario. Amante de los deportes
                        y la naturaleza. Oriundo de Tierra del fuego, Argentina. </p>
                </div>
                <div class="col-12 col-sm-4 mb-5">
                    <img src="images/garcia-mariano.nicolas.png.jpg" alt="Garcia Mariano Nicolas" class="foto-perfil">
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 mb-5">
                        <h2>
                            Stack Tecnológico
                        </h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="iconos fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Php</h3>
                            <i class="iconos fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML 5</h3>
                            <i class="iconos fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="iconos fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="iconos fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="iconos fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="iconos fa-brands fa-git-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Css</h3>
                            <i class="iconos fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React js</h3>
                            <i class="iconos fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercado Pago</h3>
                            <i class="iconos fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="iconos fa-solid fa-inbox pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="iconos fa-solid fa-font pb-5"></i>
                        </div>
                    </div>
        </section>
        <section class="container" id="experiencia">
            <div class="row">
                <div class="col-12 mt-5 my-3">
                    <h2>Experiencia laboral</h2>
                </div>
                <div class="row shadow">
                    <div class="col-sm-2 d-none d-sm-block p-5">
                        <img src="images/claroarg.jpeg" alt="claroarg" class="img-fluid">
                    </div>
                    <div class="col-sm-10 col-12 mt-5 my-3">
                        <h3>Representante de atención al cliente y ventas</h3>
                        <h4>Claro Argentina</h4>
                        <h5>2022-2023</h5>
                        <p>Atencion al cliente en sector empresa, venta de lineas y equipos. Soluciones tecnicas.
                            Manejo de sistema Stealth, Avaya, Sap, Cloud. </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="experiencia">
            <div class="row">
                <div class="col-12 mt-5 my-3">
                    <h2>Formación academica</h2>
                </div>
                <div class="row shadow">
                    <div class="col-sm-2 d-none d-sm-block p-5">
                        <img src="images/monserrat.jpg" alt="monserrat" class="img-fluid">
                    </div>
                    <div class="col-sm-10 col-12 mt-5 my-3">
                        <h3>Martillero y corredor público</h3>
                        <h4>Colegio nacional de Monserrat</h4>
                        <h5>2018-2021</h5>
                        <h6>https://monserrat.unc.edu.ar/</h6>
                    </div>
                    <div class="col-sm-2 d-none d-sm-block p-5">
                        <img src="images/depcsuite.jpeg" alt="depcsuite" class="img-fluid">
                    </div>
                    <div class="col-sm-10 col-12 mt-5 my-3">
                        <h3>Desarrollador web Full Stack</h3>
                        <h4>Depc Suite</h4>
                        <h5>2023-2024</h5>
                        <h6>https://depcsuite.com/</h6>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="conteiner">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-6 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-regular fa-comments"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLES - Intermediate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>DEPORTES - Futbol - Gym</li>
                                    <li>TREKKING - Montaña</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-4 pb-4">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-3 mt-2">
                Sponsor <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
            </div>
            <div class="col-3 mt-2">
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