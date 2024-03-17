<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="inicio")? "active": ""; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="sobre-mi")? "active": ""; ?>" href="sobre-mi.php">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="proyectos")? "active": ""; ?>" href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="contacto")? "active": ""; ?>"  href="contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="cv">
                <a href="files/Currículum Vitae (2).pdf" download="Currículum.pdf" target="_blank">Descargar mi CV <i class="fas fa-download px-3"></i></a>
            </div>
        </div>
    </div>
</nav>