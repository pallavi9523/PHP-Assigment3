<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];

echo "<h2>Submitted Details</h2>";
echo "Full Name: " . htmlspecialchars($fullname) . "<br>";
echo "Email Address: " . htmlspecialchars($email);

?>
