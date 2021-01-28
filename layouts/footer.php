    <section class="seccion_footer">
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4 xl4">
                        <h5 class="white-text">Nosotros</h5>
                        <p class="grey-text text-lighten-4" style="text-align: justify;">
                            Empresa sin fines de lucro comprometida con una lavor social y 
                            creando historias motivadoras creando familias. 
                        </p>
                    </div>
                    <div class="col s12 m2 l2 xl2" style="text-align: justify;">
                        <h5 class="white-text">Siguenos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">YouTube</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">TikTok</a></li>
                        </ul>
                    </div>
                    <div class="col s12 m2 l2 xl2" style="text-align: justify;">
                        <h5 class="white-text">Idioma</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Español</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Inglish</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">中國人</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Deutsch</a></li>
                        </ul>
                    </div>
                    <div class="col s12 m4 l4 xl4" style="text-align: justify;">
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
                        <div class="col s4">
                            © 2020 Copyright
                        </div>
                        <div class="col s4 center">
                            <a class="grey-text text-lighten-3" href="#!">Politicas de Privacidad</a>  
                        </div>
                        <div class="col s4">
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
                        <form method="POST" id="form">
                            <div class="row">
                                <div class="col s12 m6 l6 xl6">
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f1 = new LiveValidation('name');
                                        f1.add(Validate.Presence, {failureMessage: "Escribir por favor tu Login!!!"});
                                    </script>
                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" aria-describedby="email" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f2 = new LiveValidation('email');
                                        f2.add(Validate.Email);
                                    </script>
                                    <div class="input-field">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <label for="type" class="form-label">Tipo de Mascota</label>
                                        <input type="text" class="form-control" id="type" name="type" aria-describedby="type" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f3 = new LiveValidation('type');
                                        f3.add(Validate.Presence, {failureMessage: "Escribir por favor tu Tipo de Mascota!!!"});
                                    </script>
                                </div>
                                <div class="col s12 m6 l6 xl6">
                                    <div class="input-field">
                                        <i class="material-icons prefix">person_pin</i>
                                        <label for="lastname" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f4 = new LiveValidation('lastname');
                                        f4.add(Validate.Presence, {failureMessage: "Escribir por favor tu Apellido!!!"});
                                    </script>
                                    <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                        <label for="phone" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f5 = new LiveValidation('phone');
                                        f5.add(Validate.Presence, {failureMessage: "Escribir por favor tu Telefono!!!"});
                                    </script>
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_contact_calendar</i>
                                        <label for="appointment" class="form-label">Cita</label>
                                        <input type="text" class="datepicker form-control" id="appointment" name="appointment" aria-describedby="appointment" required>
                                    </div>
                                    <script type="text/javascript">
                                        var f6 = new LiveValidation('appointment');
                                        f6.add(Validate.Presence, {failureMessage: "Escribir por favor tu Fecha de Cita!!!"});
                                    </script>
                                </div> 
                            </div>
                            <p class="center-align">
                                <button class="waves-effect waves-light btn" type="submit">agendar</button>
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
                format: "yyyy/mm/dd",  
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
    <script>
    const form = document.getElementById("form")
    form.addEventListener("submit", e => {
        e.preventDefault()
        const name = document.getElementById("name").value
        const lastname = document.getElementById("lastname").value
        const email = document.getElementById("email").value
        const phone = document.getElementById("phone").value
        const type = document.getElementById("type").value
        const appointment = document.getElementById("appointment").value
        axios.post("../server/cita.php", {name, lastname, email, phone, type, appointment}).then(response => {
            if(response){
                alert("Cita Agendada Corectamente, nos pondremos en contacto a la brevedad.");
                location.reload();
            }
        })
    })
</script>
</body>
</html>
