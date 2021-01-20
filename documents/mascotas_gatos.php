<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="css/materialize.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="../js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mostrar Mascotas</title>
</head>
<body style="background-color: wheat;">
    <section>
        <div class="navbar-fixed">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="mascotas_gatos.php">Gatos</a></li>
                <li><a href="mascotas_perros.php">Perros</a></li>
            </ul>
            <nav>
                <div class="container" >
                    <div class="nav-wrapper">
                        <a href="../index.html" class="brand-logo left"><i class="material-icons">child_friendly</i>PETTING</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Adopta<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="img/Cartel/map.jpg">Ubicación</a></li>
                            <li><a class="waves-effect waves-light btn modal-trigger" href="#modalEs">Esteriliza</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section>
        <div class="fondo">
            <div class="row" ">
                <div class="col s12">
                    <div class="container" style="margin-top: 80px;">
                        <div class="row">
                            <?PHP
                                $servidor="localhost";
                                $usuario="root";
                                $clave="";
                                $conexion = mysqli_connect($servidor, $usuario, $clave, "adopciones");
                                if (!$conexion)
                                    { echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
                                
                                $sql = "select * from mascotas where tipo = 'Gato'";
                                $resultado=mysqli_query ($conexion, $sql);
                                ?>
                                <?php while($renglon = mysqli_fetch_array($resultado)) { ?>
                                    <div class="col s12 m6 l4">
                                        <div class="card">
                                            <div class="card-image" style="width: 293px; height: 300px;" >
                                                <img src="../img/Cat/<?php echo $renglon['imagen'];?>.jpg" style="width: 293px; height: 300px;">
                                                <span class="card-title" style="color: white; font-weight: bold;"><?php echo $renglon['nombre']?></span>
                                            </div>
                                            <div class="card-content" style="height: 150px;">
                                                <p>Nota: <?php echo $renglon['nota'];?>.</p>
                                                <p>Sexo: <?php echo $renglon['sexo'];?>.</p>
                                                <p>Edad: <?php echo $renglon['edad'];?>.</p>
                                                <p>Tipo: <?php echo $renglon['tipo'];?>.</p>
                                            </div>
                                            <div class="card-action">
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modalform">ADOPTAR</a>
                                            </div>
                                        </div>
                                    </div>     
                                <?php
                                    // // echo "<td><img src='" . $renglon['imagen'] . "'</td>";
                                }
                                echo "</table>";
                                mysqli_close($conexion);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section class="seccion_footer">
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l3 s12">
                        <h5 class="white-text">Nosotros</h5>
                        <p class="grey-text text-lighten-4">
                            Empresa sin fines de lucro comprometida con una lavor social y 
                            creando historias motivadoras creando familias.
                        </p>
                        <li><a class="grey-text text-lighten-3" href="#!">Politicas de Privacidad</a></li>    
                    </div>
                    <div class="col l3 offset-l2 s6">
                        <h5 class="white-text">Siguenos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">YouTube</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">TikTok</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s6">
                        <h5 class="white-text">Idioma</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Español</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Inglish</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">中國人</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Deutsch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2020 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">MIT LICENSE</a>
                </div>
            </div>
        </footer>
    </section>
<!-- Code injected by live-server -->
<script type="text/javascript">
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function () {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function (msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    }
    else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
</script>
<script>
    src="https://code.jquery.com/jquery-2.1.4.min.js"
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"
    $(".dropdown-trigger").dropdown();
</script>
</body>
</html>
