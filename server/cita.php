<?php
    $datos = json_decode(file_get_contents('php://input'));

    $name = $datos->name;
    $lastname = $datos->lastname;
    $email = $datos->email;
    $phone = $datos->phone;
    $type = $datos->type;
    $appointment = $datos->appointment;

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
    
    $sql = "INSERT INTO citas (name, lastname, email, phone, pet, date) VALUES ('$name', '$lastname', '$email', '$phone', '$type', '$appointment')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    echo json_encode($datos);
?>
