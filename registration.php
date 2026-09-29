<?php

// Store form values
$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";

// Store error messages
$username_error = "";
$email_error = "";
$gender_error = "";
$mobile_error = "";
$country_error = "";
$password_error = "";
$confirm_password_error = "";
$terms_error = "";

// Check whether form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get values from form
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $mobile = trim($_POST["mobile"] ?? "");
    $country = $_POST["country"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";
    $terms = $_POST["terms"] ?? "";


    // --------------------------------
    // Username Validation
    // --------------------------------

    if ($username == "") {

        $username_error = "Username should not be empty.";

    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {

        $username_error =
            "Only alphanumeric characters and spaces are allowed.";
    }


    // --------------------------------
    // Email Validation
    // --------------------------------

    if ($email == "") {

        $email_error = "Email should not be empty.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $email_error = "Invalid email format.";
    }


    // --------------------------------
    // Gender Validation
    // --------------------------------

    if ($gender == "") {

        $gender_error = "Gender must be selected.";
    }


    // --------------------------------
    // Mobile Validation
    // --------------------------------

    if ($mobile == "") {

        $mobile_error = "Mobile number should not be empty.";

    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {

        $mobile_error =
            "Mobile number must contain only numbers and + symbol.";
    }


    // --------------------------------
    // Country Validation
    // --------------------------------

    if ($country == "") {

        $country_error = "Country must be selected.";
    }


    // --------------------------------
    // Password Validation
    // --------------------------------

    if ($password == "") {

        $password_error = "Password should not be empty.";

    } elseif (strlen($password) < 8) {

        $password_error =
            "Password must be at least 8 characters long.";
    }


    // --------------------------------
    // Confirm Password Validation
    // --------------------------------

    if ($confirm_password == "") {

        $confirm_password_error =
            "Confirm password should not be empty.";

    } elseif ($confirm_password != $password) {

        $confirm_password_error =
            "Confirm password must be same as password.";
    }


    // --------------------------------
    // Terms Validation
    // --------------------------------

    if ($terms != "Agreed") {

        $terms_error =
            "You must agree to the terms and condition.";
    }
}

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

<form action="registration.php" method="post">


    <!-- Username -->

    Username:

    <input
        type="text"
        name="username"
        value="<?php echo htmlspecialchars($username); ?>"
    >

    <?php

    if ($username_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($username_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Email -->

    Email Address:

    <input
        type="text"
        name="email"
        value="<?php echo htmlspecialchars($email); ?>"
    >

    <?php

    if ($email_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($email_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Gender -->

    Gender:

    <input
        type="radio"
        name="gender"
        value="m"
        <?php if ($gender == "m") echo "checked"; ?>
    >
    Male

    <input
        type="radio"
        name="gender"
        value="f"
        <?php if ($gender == "f") echo "checked"; ?>
    >
    Female

    <input
        type="radio"
        name="gender"
        value="o"
        <?php if ($gender == "o") echo "checked"; ?>
    >
    Other

    <?php

    if ($gender_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($gender_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Mobile -->

    Mobile No:

    <input
        type="text"
        name="mobile"
        value="<?php echo htmlspecialchars($mobile); ?>"
    >

    <?php

    if ($mobile_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($mobile_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Country -->

    Country:

    <select name="country">

        <option value="">
            -- Select Country --
        </option>

        <option
            value="India"
            <?php if ($country == "India") echo "selected"; ?>
        >
            India
        </option>

        <option
            value="USA"
            <?php if ($country == "USA") echo "selected"; ?>
        >
            USA
        </option>

        <option
            value="UK"
            <?php if ($country == "UK") echo "selected"; ?>
        >
            UK
        </option>

        <option
            value="Canada"
            <?php if ($country == "Canada") echo "selected"; ?>
        >
            Canada
        </option>

        <option
            value="Australia"
            <?php if ($country == "Australia") echo "selected"; ?>
        >
            Australia
        </option>

    </select>

    <?php

    if ($country_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($country_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Password -->

    Password:

    <input
        type="password"
        name="password"
    >

    <?php

    if ($password_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($password_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Confirm Password -->

    Confirm Password:

    <input
        type="password"
        name="confirm_password"
    >

    <?php

    if ($confirm_password_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($confirm_password_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Terms and Conditions -->

    <input
        type="checkbox"
        name="terms"
        value="Agreed"
        <?php if ($terms == "Agreed") echo "checked"; ?>
    >

    I agree to the terms and condition

    <?php

    if ($terms_error != "") {

        echo "<span class='error'> * "
             . htmlspecialchars($terms_error)
             . "</span>";
    }

    ?>

    <br><br>


    <!-- Submit Button -->

    <input
        type="submit"
        value="Submit"
    >

</form>

</body>

</html>
