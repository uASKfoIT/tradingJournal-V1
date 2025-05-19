<?php
include 'database_connection.php'; 
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
        </div>

        <div class="form-container">
            <form action="successfulRegistration.php" method="POST" id="register-form">
                <div class="form-container__fieldbox">
                    <label class="TNR-medium__black">UserName</label><br>
                    <input class="inputBox__style1" type="text" name="username" placeholder="username" id="register-username" required><br>
                    <label class="TNR-medium__black">Password</label><br>
                    <input class="inputBox__style1" type="password" name="password" placeholder="password" id="register-password" required><br>
                    <label class="TNR-medium__black">Confirm Password</label><br>
                    <input class="inputBox__style1" type="password" name="password" placeholder="confirm password" id="register-confirmPassword" required><br>
                </div>

                <div class="button-container">
                    <div class="general-button__style1-gb selection" data-url="login.php">
                        <p>Log In</p>   
                    </div>
                    <div class="general-button__style1-gb">
                        <p>Register</p>
                        <input class="hidden-submit" type="submit">
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