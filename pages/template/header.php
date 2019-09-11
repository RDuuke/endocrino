<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiperprolactinemia y prolactinoma</title>
    <link rel="stylesheet" href="css/lib/reset.css">
    <link rel="stylesheet" href="css/template.css">
</head>
<body>
<header id="header">
    <div class="container flex">
        <div class="logo-header flex-auto">
            <img src="../../images/logo.png" alt="">
        </div>
        <nav class="flex-auto">
            <ul id="menu" class="bg-blue">
                <li class="<?php echo $_GET['page'] == 'generalidades' ? 'active' : '';?>">
                    <a href="interna.php?page=generalidades">Generalidades</a>
                </li>
                <li class="<?php echo $_GET['page'] == 'presentacion' ? 'active' : '';?>">
                    <a href="interna.php?page=presentacion">Presentación Clínica</a>
                </li>
                <li class="<?php echo $_GET['page'] == 'medicion' ? 'active' : '';?>">
                    <a href="interna.php?page=medicion">Medición e interpretación de los niveles de Prolactina</a>
                </li>
                <li class="<?php echo $_GET['page'] == 'tratamiento' ? 'active' : '';?>">
                    <a href="interna.php?page=tratamiento">Tratamiento de la Hiperprolactinemia</a>
                </li>
                <li class="<?php echo $_GET['page'] == 'practica' ? 'active' : '';?>">
                    <a href="interna.php?page=practica">Poniendo en práctica lo aprendido</a>
                </li>
            </ul>
        </nav>
    </div>
</header>