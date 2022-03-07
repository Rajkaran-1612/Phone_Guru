<?php

// Include config file
require_once "database/config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

// Validate username
if(empty(trim($_POST["username"]))){
$username_err = "Please enter a username.";
} else{
// Prepare a select statement
$sql = "SELECT id FROM users WHERE username = ?";

if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "s", $param_username);

// Set parameters
$param_username = trim($_POST["username"]);

// Attempt to execute the prepared statement
if(mysqli_stmt_execute($stmt)){
/* store result */
mysqli_stmt_store_result($stmt);

if(mysqli_stmt_num_rows($stmt) == 1){
$username_err = "This username is already taken.";
} else{
$username = trim($_POST["username"]);
}
} else{
echo "Oops! Something went wrong. Please try again later.";
}

// Close statement
mysqli_stmt_close($stmt);
}
}

// Validate password
if(empty(trim($_POST["password"]))){
$password_err = "Please enter a password.";
} else{
$password = trim($_POST["password"]);
}

// Validate confirm password
if(empty(trim($_POST["confirm_password"]))){
$confirm_password_err = "Please confirm password.";
} else{
$confirm_password = trim($_POST["confirm_password"]);
if(empty($password_err) && ($password != $confirm_password)){
$confirm_password_err = "Password did not match.";
}
}

// Check input errors before inserting in database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

// Prepare an insert statement
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";

if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

// Set parameters
$param_username = $username;
$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

// Attempt to execute the prepared statement
if(mysqli_stmt_execute($stmt)){
// Redirect to login page
header("location: index.php");
} else{
echo "Something went wrong. Please try again later.";
}

// Close statement
mysqli_stmt_close($stmt);
}
}

// Close connection
mysqli_close($link);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Phone Guru - The Perfect destination for Mobiles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .hero {
            height: 130%;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/bgimage.png);
            background-position: center;
            background-size: cover;
            position: absolute;
        }

        .form-box {
            width: 420px;
            height: 500px;
            position: relative;
            margin: 6% auto;
            background: #fff;
            padding: 5px;
            overflow: hidden;
        }

        .social-icons {
            margin: 30px;
            text-align: center;
        }

        .social-icons img {
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }

        .input-group {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;
            margin-left: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid grey;
            outline: none;
            background: transparent;
        }

        .submit-btn {
            width: 85%;
            cursor: pointer;
            padding: 10px 30px;
            display: block;
            margin-top: 20%;
            margin-left: 15%;
            border: 0;
            outline: none;
            border-radius: 30px;
        }

        .submit{
            padding-left: 45px;
        }
    </style>
</head>
<body>
<div class="hero">
    <div class= "form-box">
        <h2 style="margin-left: 20px" class="text-primary">Sign Up</h2>
        <p style="margin-left: 20px">Please fill this form to create an account.</p>
        <div class="social-icons">
            <img src="assets/fb.png">
            <img src="assets/tw.png">
            <img src="assets/gp.jpg">
        </div>
        <form id="register" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" class="input-field" placeholder="Username" name="username" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" class="input-field" placeholder="Password" name="password" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="input-field" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group submit">
                <input type="submit" class="btn btn-primary submit-btn" value="Register">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</div>
</body>
</html>

