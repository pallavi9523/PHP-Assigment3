<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
<h2>Registration Form</h2>
<form action="processreg.php" method="post">
    Username:
    <input type="text" name="username">
    <br><br>
    Email Address:
    <input type="text" name="email">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="m">
    Male
    <input type="radio" name="gender" value="f">
    Female
    <input type="radio" name="gender" value="o">
    Other
    <br><br>
    Mobile No:
    <input type="text" name="mobile">
    <br><br>
    Country:
    <select name="country">
        <option value="">-- Select Country --</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>

    </select>
    <br><br>
    Password:
    <input type="password" name="password">
    <br><br>
    Confirm Password:
    <input type="password" name="confirm_password">
    <br><br>
    <input type="checkbox" name="terms" value="Agreed">
    I agree to the terms and condition
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
