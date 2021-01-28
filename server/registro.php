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
    
    echo "Connected successfully";
    
    $sql = "INSERT INTO usuarios (username, password, name, curp, rfc, address, email) VALUES ('$login', '$passwordMd5', '$name', '$curp', '$rfc', '$address', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    echo json_encode($datos);
?>
