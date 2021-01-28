<?php 
    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        $id_user = $user->getId();
    } else {
		header("location: ../index.html");
    }
?>
<?php include('../layouts/header.php'); ?>
<title>Mis Adopciones</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 40px;">
                <table class="centered col s12 m12 l12 xl12" style="background-color: white;">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('../server/conexion.php');
                                $resultado = $conexion -> query( "select * from adopciones where id_user = $id_user") or die($conexion -> error);
                            ?>
                            <?php 
                                while($fila = mysqli_fetch_array($resultado)) { 
                                    $id = $fila['id_pet'];
                                    $arreglo[] = array(
                                        'Id' => $id
                                    );
                                }

                                if(isset($arreglo) && $arreglo != 0) {
                                    for($i=0; $i<count($arreglo); $i++){
                                        $resultado = $conexion -> query( "select * from mascotas where id =".$arreglo[$i]['Id']) or die($conexion -> error);
                                        while($fila = mysqli_fetch_array($resultado)) {
                            ?>
                            <tr>
                                <td><img src="../img/pet/<?php echo $fila['imagen'];?>" style="width: 100px; height: 100px;"></td>
                                <td><?php echo $fila['nombre'];?></td>
                                <td><?php echo $fila['tipo'];?></td>
                                <td><a class="waves-effect waves-light btn modal-trigger" href="pet_details.php?id=<?php echo $fila['id'];?>">Ver</a></td>
                            </tr>
                            <?php } } } mysqli_close($conexion); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>
