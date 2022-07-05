<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mainEstilos.css">
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
                include 'section.php';
            ?>
        </section>
        <!--Contenido secundario-->
        <aside>
            <?php
                include 'aside.php';
            ?>
        </aside>
    </main>

    <!--Pie de la página web de la página web-->
    <footer>
        <?php
        include 'footer.php'
        ?>
    </footer>
</body>

</html>