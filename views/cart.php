<?php
    include '../server/conexion.php';
    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        $id_user = $user->getId();

        if(isset($_SESSION['carrito'])) {
            // Si existe buscamos si ya estaba agregado esa mascota
            if(isset($_GET['id'])) {
                $arreglo = $_SESSION['carrito'];
                $encontro = false;
                $numero = 0;
                for($i=0; $i<count($arreglo); $i++) {
                    if($arreglo[$i]['Id'] == $_GET['id']) {
                        $encontro = true;
                        $numero = $i;
                    }
                }
                if($encontro == true) {
                    $arreglo[$numero]['Cantidad'] = 1;
                    $_SESSION['carrito'] = $arreglo;
                    header("Location: ./cart.php");
                } else {
                    // No estaba el registro
                    $imagen = "";
                    $nombre = "";
                    $tipo = "";
                    $resultado = $conexion -> query( "select * from mascotas where id =" .$_GET['id']) or die($conexion -> error);
                    $fila = mysqli_fetch_row($resultado);
                    
                    $imagen = $fila[6];
                    $nombre = $fila[1];
                    $tipo = $fila[5];
                    $arregloNuevo = array(
                        'Id' => $_GET['id'],
                        'Imagen' => $imagen,
                        'Nombre' => $nombre,
                        'Tipo' => $tipo,
                        'Cantidad' => 1
                    );
                    array_push($arreglo, $arregloNuevo);
                    $_SESSION['carrito'] = $arreglo;
                    header("Location: ./cart.php");
                }
            }
        } else {
            // Creamos la variable de sesion
            if(isset($_GET['id'])) {
                $nombre = "";
                $tipo = "";
                $imagen = "";
                $res = $conexion -> query( "select * from mascotas where id =" .$_GET['id']) or die($conexion -> error);
                $fila = mysqli_fetch_row($res);
                
                $nombre = $fila[1];
                $tipo = $fila[5];
                $imagen = $fila[6];
                $arreglo[] = array(
                    'Id' => $_GET['id'],
                    'Nombre' => $nombre,
                    'Tipo' => $tipo,
                    'Imagen' => $imagen,
                    'Cantidad' => 1
                );
                $_SESSION['carrito'] = $arreglo;
                header("Location: ./cart.php");
            }
        }
    } else {
		header("location: login.php");
    }
    
    include('../layouts/header.php');
?>
<title>Carrito</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12" style="margin-top: 20px;">
                <div class="container">
                    <div class="left">
                        <a class="waves-effect waves-light btn modal-trigger" href="my_adoptions.php">Mis Adopciones</a>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container" style="margin-top: 20px;">
                    <table class="centered col s12 m12 l12 xl12" style="background-color: white;">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_SESSION['carrito'])) {
                                    $arregloCarrito = $_SESSION['carrito'];
                                    for($i=0; $i<count($arregloCarrito); $i++) {
                            ?>
                            <tr>
                                <td><img src="../img/pet/<?php echo $arregloCarrito[$i]['Imagen'];?>" style="width: 100px; height: 100px;"></td>
                                <td><?php echo $arregloCarrito[$i]['Nombre'];?></td>
                                <td><?php echo $arregloCarrito[$i]['Tipo'];?></td>
                                <td><a href='#' class="waves-effect waves-light btn btnEliminar" data-id="<?php echo $arregloCarrito[$i]['Id'];?>">X</a></td>
                            </tr>
                            <?php } }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s12" style="margin-top: 20px;">
                <div class="container">
                    <?php
                        if(isset($_SESSION['carrito']) && $_SESSION['carrito'] != 0) {
                    ?>
                    <div class="right">
                        <a class="waves-effect waves-light btn modal-trigger" href="checkout.php">Adorptar</a>
                    </div>
                    <?php }  mysqli_close($conexion); ?>
                </div>
            </div>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>
<script>
    $(document).ready(function() {
        $(".btnEliminar").click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var boton = $(this);
            $.ajax({
                method:'POST',
                url:'../server/eliminarCarrito.php',
                data: {
                    id:id
                }
            }).done(function(respuesta) {
                boton.parent('td').parent('tr').remove();
            });
        });
    });
</script>