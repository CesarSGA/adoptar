<?php 
    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        $id_user = $user->getId();

        include('../server/conexion.php');
    
        if(!isset($_SESSION['carrito'])){
            header('Location: ../index.html');
        }
        
        $arreglo = $_SESSION['carrito'];
        $tiempo = new \DateTime();
        $fecha = $tiempo->format('Y-m-d');

        for($i=0; $i<count($arreglo); $i++){
            $id_pet = $arreglo[$i]['Id'];
            $conexion -> query( "UPDATE `mascotas` SET `estatus` = '0' WHERE `mascotas`.`id` = $id_pet;") or die($conexion -> error);
            $conexion -> query( "insert into adopciones(id_user, id_pet, date) values($id_user,$id_pet,$fecha)") or die($conexion -> error);
        }
        unset($_SESSION['carrito']);
    } else {
        header("location: ../index.html");
    }
?>
<?php include('../layouts/header.php'); ?>
<title>Gracias</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 20px; margin-bottom: 38px;">
                    <div class="row">
                        <div class="col s12" style="background-color: white;">
                            <div class="center">
                                <h2 class="display-3 text-black">Gracias!</h2>
                                <p class="lead mb-5">Su adopcion se completó con éxito.</p>
                                <p><a href="../index.html" class="btn btn-sm btn-primary">Volver al inicio</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>
