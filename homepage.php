<html>
<head>
    <link rel="stylesheet" href="header_content.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <!--Header Content-->
    <?php include 'header_content.php'; ?>

    <!--Main Page-->
    <div class="main-content">        
        <img id="bg-image">
        <div class="menu">
            <div class="option selection" data-url="journal.php">
                <img id="trading_journal">
            </div>
            <div class="option selection" data-url="trade.php"> 
                <img id="new_trade">
            </div>
        </div>
    </div>

    <script src="homepage.js"></script>
    <script src="header_content.js"></script>
    <script src="GeneralFunctions.js"></script>
</body>
</html>