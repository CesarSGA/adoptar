<?php include('../layouts/header.php'); ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="../js/livevalidation_standalone.compressed.js"></script>
<title>Adopta un Perro</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12" style="background-color: white;">
                            <div class="container" >
                                <h4 class="center-align">Registro de Usuario</h4>
                                <form method="POST" id="formRegister">
                                    <div class="row">
                                        <div class="col s12 m6 l6 xl6">                                            
                                            <div class="input-field">
                                                <label for="login" class="form-label">Nombre de Usuario</label>
                                                <input type="text" class="form-control" id="login" name="login" aria-describedby="login">
                                            </div>
                                            <script type="text/javascript">
                                                var f1 = new LiveValidation('login');
                                                f1.add(Validate.Presence, {failureMessage: "Escribir por favor tu Login!!!"});
                                            </script>
                                            <div class="input-field">
                                                <label for="nameRegister" class="form-label">Nombre Completo</label>
                                                <input type="text" class="form-control" id="nameRegister" aria-describedby="nameRegister">
                                            </div>
                                            <script type="text/javascript">
                                                var f3 = new LiveValidation('nameRegister');
                                                f3.add(Validate.Presence, {failureMessage: "Escribir por favor tu Nombre!!!"});
                                            </script>
                                            <div class="input-field">
                                                <label for="rfc" class="form-label">RFC</label>
                                                <input type="text" class="form-control" id="rfc" aria-describedby="rfc">
                                            </div>
                                            <script type="text/javascript">
                                                var f5 = new LiveValidation('rfc');
                                                f5.add(Validate.Format, {pattern: /^[a-zA-Z]{3,4}(\d{6})((\D|\d){2,3})?$/, failureMessage: "Escribir por favor tu RFC!!!"});
                                                f5.add(Validate.Length, {minimum: 12, maximum: 12});
                                            </script>
                                            <div class="input-field">
                                                <label for="emailRegister" class="form-label">Correo electronico</label>
                                                <input type="text" class="form-control" id="emailRegister" aria-describedby="emailRegister" required>
                                            </div>
                                            <script type="text/javascript">
                                                var f7 = new LiveValidation('emailRegister');
                                                f7.add(Validate.Email);
                                            </script>
                                        </div>
                                        <div class="col s12 m6 l6 xl6">
                                            <div class="input-field">
                                                <label for="password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" id="password" aria-describedby="password">
                                            </div>
                                            <script type="text/javascript">
                                                var f2 = new LiveValidation('password');
                                                f2.add(Validate.Presence, {failureMessage: "Escribir por favor tu Password!!!"});
                                                f2.add(Validate.Length, {minimum:6, maximum:100});
                                            </script> 
                                            <div class="input-field">
                                                <label for="curp" class="form-label">CURP</label>
                                                <input type="text" class="form-control" id="curp" aria-describedby="curp">
                                            </div>
                                            <script type="text/javascript">
                                                var f4 = new LiveValidation('curp');
                                                f4.add(Validate.Presence, {failureMessage: /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/, failureMessage: "Escribir por favor tu CURP!!!"});
                                                f4.add(Validate.Length, {minimum: 18, maximum: 18});
                                            </script>
                                            <div class="input-field">
                                                <label for="address" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" id="address" aria-describedby="address">
                                            </div>
                                            <script type="text/javascript">
                                                var f6 = new LiveValidation('address');
                                                f6.add(Validate.Presence, {failureMessage: "Escribir por favor tu Direccion!!!"});
                                            </script>
                                            <div class="input-field">
                                                <div class="right">
                                                    <img id="captcha" src="../server/securimage/securimage_show.php" alt="CAPTCHA Image" />            
                                                </div>
                                                <label for="captcha_code" class="form-label">Captcha</label>
                                                <input type="text" name="captcha_code" id="capcha" size="10" maxlength="6" />
                                                <a href="#" onclick="document.getElementById('captcha').src = '../server/securimage/securimage_show.php?' + Math.random(); return false">Cambiar captcha</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center">
                                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Enviar</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const formRegister = document.getElementById("formRegister")
    formRegister.addEventListener("submit", e => {
        e.preventDefault()
        const login = document.getElementById("login").value
        const password = document.getElementById("password").value
        const name = document.getElementById("nameRegister").value
        const curp = document.getElementById("curp").value
        const rfc = document.getElementById("rfc").value
        const address = document.getElementById("address").value
        const email = document.getElementById("emailRegister").value
        const capcha = document.getElementById("capcha").value
        axios.post("../server/registro.php", {login, password, name, curp, rfc, address, email, capcha}).then(response => {
            if(response){
                var URLdomain = window.location.host;

                if(response['data']['error'] == "Error en capcha") {
                    alert("Error en capcha intenta nuevamente.");
                } else {
                    window.location.replace("/adoptar/views/login.php");
                }
            }
        })
    })
</script>
<?php include('../layouts/footer.php'); ?>
