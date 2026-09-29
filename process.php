<?php
include "connect.php";
$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$gender = $_POST["gender"] ?? "";
$mobile = $_POST["mobile"] ?? "";
$country = $_POST["country"] ?? "";
$password = $_POST["password"] ?? "";

$sql = "INSERT INTO registration
        (username, email, gender, mobile, country, password)
        VALUES
        ('$username', '$email', '$gender', '$mobile', '$country', '$password')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    header("Location: registration.php");
    exit();
}
?>
