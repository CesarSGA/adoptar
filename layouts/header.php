<?php
    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="css/materialize.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="../js/livevalidation_standalone.compressed.js"></script>
</head>
<body style="background-color: wheat;">
    <section>
        <div class="navbar-fixed">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="gatos.php">Gatos</a></li>
                <li><a href="perros.php">Perros</a></li>
            </ul>
            <nav>
                <div class="container" >
                    <div class="nav-wrapper">
                        <a href="../index.html" class="brand-logo"><i class="material-icons">child_friendly</i>PETTING</a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Adopta<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="stories.php">Historias</a></li>
                            <li><a class="modal-trigger" href="#modalEs">Esteriliza</a></li>
                            <?php if(isset($_SESSION['user'])){ ?>
                                <li><a href="my_adoptions.php">Mis Adopciones</a></li>
                                <li>
                                    <a href="cart.php" class="cart"> 
                                    <span class="item-in-cart">
                                        <?php
                                            if(isset($_SESSION['carrito'])){
                                                echo count($_SESSION['carrito']);
                                            } else {
                                                echo 0;
                                            }
                                        ?>
                                    </span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                                    </svg>
                                    </a>
                                </li>
                                <li><a href="../server/user/logout.php">LogOut</a></li>

                            <?php } else { ?>
                                <li><a href="../views/login.php">LogIn</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="views/gatos.php">Gatos</a></li>
            <li><a href="views/perros.php">Perros</a></li>
        </ul>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="../index.html">Inicio</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown">Adopta<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="stories.php">Historias</a></li>
            <li><a class="modal-trigger" href="#modalEs">Esteriliza</a></li>
            <?php if(isset($_SESSION['user'])){ ?>
                <li><a href="my_adoptions.php">Mis Adopciones</a></li>
                <li>
                    <a href="cart.php" class="cart"> 
                    <span class="item-in-cart">
                        <?php
                            if(isset($_SESSION['carrito'])){
                                echo count($_SESSION['carrito']);
                            } else {
                                echo 0;
                            }
                        ?>
                    </span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                    </svg>
                    </a>
                </li>
                <li><a href="../server/user/logout.php">LogOut</a></li>

            <?php } else { ?>
                <li><a href="../views/login.php">LogIn</a></li>
            <?php } ?>
        </ul>
    </section>
