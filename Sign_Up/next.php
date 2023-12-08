<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "sign_up";

    $con = new mysqli($server, $user, $pass, $db);

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO information (name,surname,email,password) VALUES ('$name','$surname','$email','$password')";

    if ($con->query($sql) === TRUE) {
        require "again.php";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $con->close();

?>