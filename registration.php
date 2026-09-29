<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form action="process.php" method="post">

        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Email Address:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br><br>

        <label>Mobile No:</label>
        <input type="tel" name="mobile" required>
        <br><br>

        <label>Country:</label>
        <select name="country" required>
            <option value="">-- Select Country --</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
        </select>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <br><br>

        <input type="checkbox" name="terms" value="Agreed" required>
        <label>I agree to the terms and condition</label>
        <br><br>

        <input type="submit" value="Submit">

    </form>

</body>
</html>
