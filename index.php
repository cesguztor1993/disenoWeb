<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mainEstilos.css">

    <script src="js/mainScript.js"></script>
</head>

<body>
    <!--Cabecera -->
    <header>
        <?php
        include 'header.php';
        ?>
    </header>

    <!--Menú princpal-->
    <nav>
        <?php
        include 'nav.php';
        ?>
    </nav>


    <!--Cuerpo principal del la página web-->
    <main>
        <!--Contenido principal-->
        <section>
            <?php
            $pagina = isset($_GET["p"]) ? strtolower($_GET["p"]) : 'section';
            if ($pagina == 'section') {
                include $pagina . '.php';
            } else {
                include 'contenido/' . $pagina . '.php';
            }
            ?>
        </section>
        <!--Contenido secundario-->
        <aside>
            <?php
            include 'aside.php';
            ?>
        </aside>
        <div class="limpieza"></div>
    </main>

    <!--Pie de la página web de la página web-->
    <footer>
        <?php
        include 'footer.php'
        ?>
    </footer>
</body>

</html>