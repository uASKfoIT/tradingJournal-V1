<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="GeneralButtons.css">
    <link rel="stylesheet" href="GeneralText.css">
</head>
<body>
    <!--Header-->
    <div class="welcomebar">
        <div class="welcomebar__title selection" data-url="welcome.php">
            <p class="TNR-xxlarge__white">Journal</p> 
        </div>

        <div class="welcomebar__buttons">
            <div class="general-button__style1 selection" data-url="login.php">
                <p class="TNR-large__white">Log In</p>
            </div>
            <div class="general-button__style1 selection" data-url="signup.php">
                <p class="TNR-large__white">Register</p>
            </div>
        </div>
    </div>
    
    <!--Main Content-->
    <div class="welcome-content">
       <img id="welcome-banner">
       <div class="message-container">
            <h1>Keep Track Of Your Trades</h1>
            <div class="buttons-container">
                <div class="button selection" data-url="login.php"><p class="TNR-large__white">Log In</p></div>
                <div class="button selection" data-url="signup.php"><p class="TNR-large__white">Register</p></div>
            </div>
       </div>
    </div>

    <script src="welcome.js"></script>
    <script src="GeneralFunctions.js"></script>
</body>
</html>