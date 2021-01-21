<?php session_start();?>
<?php include('../layouts/header.php'); ?>
<title>Adopta un Perro</title>
<section>
    <div class="fondo">
        <div class="row" ">
            <div class="col s12">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                        <?php
                            include('../server/conexion.php');
                            $resultado = $conexion -> query( "select * from mascotas where tipo = 'Perro'") or die($conexion -> error);
                        ?>
                        <?php while($fila = mysqli_fetch_array($resultado)) { ?>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-image" style="width: 293px; height: 300px;" >
                                        <img src="../img/pet/<?php echo $fila['imagen'];?>" style="width: 293px; height: 300px;">
                                        <span class="card-title" style="color: white; font-weight: bold;"><?php echo $fila['nombre']?></span>
                                    </div>
                                    <div class="card-content" style="height: 150px;">
                                        <p>Nota: <?php echo $fila['nota'];?>.</p>
                                        <p>Sexo: <?php echo $fila['sexo'];?>.</p>
                                        <p>Edad: <?php echo $fila['edad'];?>.</p>
                                        <p>Tipo: <?php echo $fila['tipo'];?>.</p>
                                    </div>
                                    <div class="card-action center">
                                        <a class="waves-effect waves-light btn modal-trigger" href="pet_details.php?id=<?php echo $fila['id'];?>">ADOPTAR</a>
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
