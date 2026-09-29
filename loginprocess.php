<?php

include "connect.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM registration 
        WHERE username='$username' 
        AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // Login successful
    header("Location: home.php");
    exit();

} else {

    // Login failed
    header("Location: login.php");
    exit();

}

?>
