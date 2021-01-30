<?php

    $servername = "localhost";
    $username = "webadmin";
    $password = "1234";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    var_dump($_POST);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}')";
    if ($conn->query($sql) === TRUE) {
        header("location: table.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>