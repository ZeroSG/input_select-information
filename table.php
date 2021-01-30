<?php

    $servername = "localhost";
    $username = "webadmin";
    $password = "1234";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>table, th, td {
  border: 1px solid black;
}</style>
</head>
<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["firstname"]; ?></td>
            <td><?php echo $row["lastname"]; ?></td>
        </tr>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
    </table>
    <hr>
    <button><a href="insert_form.php" style="text-decoration:none">เพิ่มข้อมูล</a></button>
</body>
</html>