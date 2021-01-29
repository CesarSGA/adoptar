<?php
    $datos = json_decode(file_get_contents('php://input'));

    $login = $datos->login;
    $password = $datos->password;
    $passwordMd5 = md5($password);
    $name = $datos->name;
    $curp = $datos->curp;
    $rfc = $datos->rfc;
    $address = $datos->address;
    $email = $datos->email;
    $capcha = $datos->capcha;

    $servername = "localhost";
    $database = "adopciones";
    $username = "root";
    $pass = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $pass, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());

    }

    include_once $_SERVER['DOCUMENT_ROOT'] . '/adoptar/server/securimage/securimage.php';
    $securimage = new Securimage();
    if ($securimage->check($capcha) == false) {
        $mensaje = ["error" => "Error en capcha"];
        echo json_encode($mensaje);
    } else {
        $sql = "INSERT INTO usuarios (username, password, name, curp, rfc, address, email) VALUES ('$login', '$passwordMd5', '$name', '$curp', '$rfc', '$address', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

        echo json_encode($datos);
    }   
?>
