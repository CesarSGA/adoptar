<?php 

    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        $id_user = $user->getId();

        if(!isset($_SESSION['carrito'])){
            header('Location: ../index.html');
        }
        
        $arreglo = $_SESSION['carrito'];
        
        include('../server/conexion.php');
        
        $resultado = $conexion -> query( "select * from usuarios where id = $id_user") or die($conexion -> error);
        if(mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_row($resultado);
        } else {
            header("Location: ../index.html");
        }
    } else {
		header("location: ../index.html");
    }
?>
<?php include('../layouts/header.php'); ?>
<title>Validar Datos</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col s12 m8 l8 xl8" style="background-color: white; margin-bottom: 20px;">
                            <div class="container" >
                                <h4 class="center-align">Validar Datos</h4>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="col s12 m6 l6 xl6">
                                            <div class="input-field">
                                                <i class="material-icons prefix">person</i>
                                                <label for="name">Nombre</label>
                                                <input type="text" name="name" required value="<?php echo $fila[3]; ?>">
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">email</i>
                                                <label for="email">Email</label>
                                                <input type="email" name="email" required value="<?php echo $fila[7]; ?>">
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">home</i>
                                                <label for="addrees">Direccion</label>
                                                <input type="text" name="addrees" required value="<?php echo $fila[6]; ?>">
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l6 xl6">
                                            <div class="input-field">
                                                <i class="material-icons prefix">person_pin</i>
                                                <label for="curp">CURP</label>
                                                <input type="text" name="curp" required value="<?php echo $fila[4]; ?>">
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">assignment</i>
                                                <label for="rfc">RFC</label>
                                                <input type="text" name="rfc" required value="<?php echo $fila[5]; ?>">
                                            </div>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col s12 m4 l4 xl4 ">
                            <table class="centered col s12 m12 l12 xl12" style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0; $i<count($arreglo); $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo $arreglo[$i]['Nombre'];?></td>
                                        <td><?php echo $arreglo[$i]['Tipo'];?></td>
                                    </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
            <p class="center-align">
                <a class="waves-effect waves-light btn modal-trigger" href="tankyou.php"><i class="material-icons right">send</i>listo</a>
            </p>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>
