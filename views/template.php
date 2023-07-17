<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <img src="/images/header.png">
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php?action=inicio">Inicio</a>
            </li>
            <li>
                <a href="index.php?action=nosotros">Nosotros</a>
            </li>
            <li>
                <a href="index.php?action=servicios">Servicios</a>
            </li>
            <li>
                <a href="index.php?action=contactanos">Contactanos</a>
            </li>
        </ul>
    </nav>
    <section>
        <?php
            require_once 'controller/controller.php';
            $mvc=new mvcController();
            $mvc->enlacesPaginasController();
        ?>
        
    </section>
    <footer>
        Derechos reservados cuarto sistemas
    </footer>
</body>
</html>