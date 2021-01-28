<?php session_start();?>
<?php
    include('../server/conexion.php');
    if(isset($_GET['id'])) {
        $resultado = $conexion -> query( "select * from mascotas where id =" .$_GET['id']) or die($conexion -> error);
        if(mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_row($resultado);
        } else {
            header("Location: ../index.html");
        }
    } else {
        header("Location: ../index.html");
    }
?>
<?php include('../layouts/header.php'); ?>
<title>Detalles de la Mascota</title>
<section>
    <div class="fondo">
        <div class="row" >
            <div class="col s12">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                        <div class="col 8 s8">
                            <div class="row" >
                                <div class="col s12 m8 l8 xl8">
                                    
                                      <img src="../img/Cartel/p3.jpg" alt="" style=" width: 100%; height: 100%;">
                                
                                </div>
                                <div class="col s12 m4 l4 xl4" >
                                   <div class="container center-align" style="margin-top: 45px; margin-left: 15px;">
                                    <div >
                                        <div>
                                            <img src="../img/cartel/i1.png" alt="" style="width: 50px;">
                                        </div>
                                        <a class="waves-effect waves-light btn modal-trigger" style="margin: 20px; width: 150px;" href="#modal1">Infomación</a> 
                                    </div>
                                    <div>
                                        <div>
                                            <img src="../img/cartel/i2.png" alt="" style="width: 50px;">
                                        </div>
                                        <a class="waves-effect waves-light btn modal-trigger" style="margin: 20px; width: 150px;"href="#modal2">Contactanos</a>
                                    </div>
                                    <div>
                                        <div>
                                            <img src="../img/cartel/i3.png" alt="" style="width: 50px;">
                                        </div>
                                        <a class="waves-effect waves-light btn modal-trigger" style="margin: 20px; width: 150px;" href="#modal3">Requisitos</a>
                                    </div>
                                </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col 4 s4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../img/pet/<?php echo $fila[6];?>" style="width: 100%; height: 250px;">
                                    <span class="card-title" style="color: white; font-weight: bold;"><?php echo $fila[1]?></span>
                                </div>
                                <div class="card-content" style="height: 150px;">
                                    <p>Nota: <?php echo $fila[2];?>.</p>
                                    <p>Sexo: <?php echo $fila[3];?>.</p>
                                    <p>Edad: <?php echo $fila[4];?>.</p>
                                    <p>Tipo: <?php echo $fila[5];?>.</p>
                                </div>
                                <div class="card-action center">
                                    <a class="waves-effect waves-light btn modal-trigger" href="cart.php?id=<?php echo $fila[0];?>">Agregar a mis Adopciones</a>
                                </div>
                            </div>
                        </div>     
                        <?php mysqli_close($conexion); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>