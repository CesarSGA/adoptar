    <section class="seccion_footer">
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col 4 s4">
                        <h5 class="white-text">Nosotros</h5>
                        <p class="grey-text text-lighten-4" style="text-align: justify;">Empresa sin fines de lucro comprometida con una lavor social y 
                            creando historias motivadoras creando familias. </p>
                    </div>
                    <div class="col 2 s2" style="text-align: justify;">
                        <h5 class="white-text">Siguenos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">YouTube</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">TikTok</a></li>
                        </ul>
                    </div>
                    <div class="col 2 s2" style="text-align: justify;">
                        <h5 class="white-text">Idioma</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Español</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Inglish</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">中國人</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Deutsch</a></li>
                        </ul>
                    </div>
                    <div class="col 4 s4" style="text-align: justify;">
                        <h5 class="white-text">Ubicacion</h5>
                        <ul>
                            <iframe _ngcontent-fst-c3="" frameborder="0" height="100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.168286745534!2d-99.17093298526561!3d19.36186458692447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2a32fb54cd%3A0xc032b9cecdd00867!2sTecnol%C3%B3gico%20Nacional%20De%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1569527710329!5m2!1ses-419!2smx" style="border:0;" width="100%"></iframe> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col 4 s4">
                            © 2020 Copyright
                        </div>
                        <div class="col 4 s4 center">
                            <a class="grey-text text-lighten-3" href="#!">Politicas de Privacidad</a>  
                        </div>
                        <div class="col 4 s4">
                            <a class="grey-text text-lighten-4 right" href="https://www.facebook.com/cesar.guzman.357">Created By</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <section id="modales">
        <div id="modalEs" class="modal" style="height: 500px;">
            <div class="modal-content" style="height: 200px;">
                <div style="text-align: right;">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                </div>
                <title>Formulario de Contacto</title>
                <section class="container">
                    <div class="row">
                        <h4 class="center-align">Agenda Cita</h4>
                        <form method="POST" action="formulario-contacto.php">
                            <div class="row">
                                <div class="col 6 s6">
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" required>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <label for="tipo">Tipo de Mascota</label>
                                        <input type="text" name="tipo" required>
                                    </div>
                                </div>
                                <div class="col 6 s6">
                                    <div class="input-field">
                                        <i class="material-icons prefix">person_pin</i>
                                        <label for="apellido">Apellido</label>
                                        <input type="text" name="apellido" required>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                        <label for="phone">Telefono</label>
                                        <input type="text" name="phone" required>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_contact_calendar</i>
                                        <label for="cita">Cita</label>
                                        <input type="text" name="cita"class="datepicker">
                                    </div>
                                </div> 
                            </div>
                            <p class="center-align">
                                <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>enviar</button>
                            </p>
                        </form>
                    </div>
                </section>
            </div>  
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $('.datepicker').datepicker({
                container: 'body',
                format: "dd/mm/yyyy",  
            });
            $(".dropdown-trigger").dropdown();
        });
    </script>
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
</body>
</html>
