<?php session_start();?>
<?php include('../layouts/header.php'); ?>
<title>Historias de Adopciones</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                        <?php
                            include('../server/conexion.php');
                            $resultado = $conexion -> query( "select * from historias") or die($conexion -> error);
                        ?>
                        <?php while($fila = mysqli_fetch_array($resultado)) { ?>
                            <div class="col s12 m6 l6 xl6">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="../img/cartel/<?php echo $fila['imagen'];?>" style="width: 100%; height: 300px;">
                                        <span class="card-title" style="color: white; font-weight: bold;"><?php echo $fila['nombre']?></span>
                                    </div>
                                    <div class="card-content" style="height: 250px;">
                                        <p>Historia: <?php echo $fila['historia'];?>.</p>
                                    </div>
                                </div>
                            </div>     
                        <?php } mysqli_close($conexion); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
<section/>
<?php include('../layouts/footer.php'); ?>
