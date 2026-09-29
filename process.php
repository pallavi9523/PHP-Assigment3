<?php

$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$terms = isset($_POST['terms']) ? $_POST['terms'] : "Not Agreed";

echo "<h2>Registration Details</h2>";

echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Email Address: " . htmlspecialchars($email) . "<br>";
echo "Gender: " . htmlspecialchars($gender) . "<br>";
echo "Mobile No: " . htmlspecialchars($mobile) . "<br>";
echo "Country: " . htmlspecialchars($country) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";
echo "Confirm Password: " . htmlspecialchars($confirm_password) . "<br>";
echo "Terms and Conditions: " . htmlspecialchars($terms) . "<br>";

?>
