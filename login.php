<?php
include 'database_connection.php'; // or require 'connect.php';
?>
<html>
<head>
    <link rel="stylesheet" href="header_content.css">
    <link rel="stylesheet" href="login-signup.css">
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="GeneralInputBoxes.css">
    <link rel="stylesheet" href="GeneralButtons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <!--Header Content-->
    <?php include 'header_content.php'; ?>

    <!--Main Content-->
    <div class="credential-container">
        <div class="banner-container">
            <img id="banner-image">
        </di>

        <div class="form-container">
            <form action="homepage.php" method="POST" id="login-form">
                <div class="form-container__fieldbox">
                    <label class="TNR-medium__black">UserName</label><br>
                    <input class="inputBox__style1" type="text" name="login-username" placeholder="UserName"  id="login-username" required><br>
                    <label class="TNR-medium__black">Password </label><br>
                    <input class="inputBox__style1" type="password" name="login-password" placeholder="Password" id="login-password" required><br>
                </div>

                <div class="button-container">
                    <div class="general-button__style1-gb">
                        <p>Log In</p>   
                        <input class="hidden-submit" type="submit">
                    </div>
                    <div class="general-button__style1-gb selection" data-url="signup.php">
                        <p>Register</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="header_content.js"></script>
    <script src="login-signup.js"></script>
    <script src="GeneralFunctions.js"></script>
</body>
</html>