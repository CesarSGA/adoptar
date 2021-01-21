<?php
    session_start();
    $arreglo = $_SESSION['carrito'];
    for($i=0; $i<count($arreglo); $i++) {
        if($arreglo[$i]['Id'] != $_POST['id']) {
            $arregloNuevo[] = array(
                'Id'        => $arreglo[$i]['Id'],
                'Nombre'    => $arreglo[$i]['Nombre'],
                'Tipo'      => $arreglo[$i]['Tipo'],
                'Imagen'    => $arreglo[$i]['Imagen'],
                'Cantidad'  => $arreglo[$i]['Cantidad']
            );
        }
    }
    if(isset($arregloNuevo)) {
        $_SESSION['carrito'] = $arregloNuevo;
    } else {
        // El registro a eliminar es el unico
        unset($_SESSION['carrito']);
    }
    echo "listo";
?>