<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica no. 1</title>
    <style>
    header {
        position: relative;
        margin: auto;
        text-align: center;
        padding: 5px;
    }

    nav {
        position: relative;
        margin: auto;
        width: 100%;
        height: auto;
        background: black;
    }

    nav ul {
        position: relative;
        margin: auto;
        width: 50%;
        text-align: center;
    }

    nav ul li {
        display: inline-block;
        width: 24%;
        line-height: 50px;
        list-style: none;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    section {
        position: relative;
        padding: 20px;
    }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenidos a la practica no. 1</h1>
    </header>
    <?php
    include "navegacion.php";
    ?>
    <section>
        <!--Contenedor donde se muestran las opciones del sistema-->
        <?php
    $mvc = new MvcController();
    $mvc->enlacesPaginasController();

    ?>


    </section>
</body>

</html>