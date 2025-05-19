<html>
<head>
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="GeneralButtons.css">
    <link rel="stylesheet" href="header_content.css">
    <link rel="stylesheet" href="performance.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <!--Header Content-->
    <?php include 'header_content.php'; ?>
    
    <!--Main Content-->
    <div class="main-content">
        <div class="performance-container">
            <div class="performance-container__title"> <p class="TNR-large__black" >Peformance Summary</p></div>
            <div class="actual-content">
                <div class="timeframe-button"></div>
                <div class="content"></div>
            </div>
        </div>

        <div class="performance-container">
            <div class="performance-container__title"><p class="TNR-large__black" >Top Gaines & Losers</p></div>
            <div class="actual-content">
                <div class="timeframe-button"></div>
                <div class="content"></div>
            </div>
        </div>

        <div class="performance-container">
            <div class="performance-container__title"><p class="TNR-large__black" >Sector Summary</p></div>
            <div class="actual-content">
                <div class="timeframe-button" id="timeframe-button">
                    <p class="dropdown-display" id="dropdown-display">Select</p>
                    <ul class="dropdown-menu" id="dropdown-menu"></ul>
                </div>
                <div class="content"></div>
            </div>
        </div>




    </div>

    <script src="header_content.js"></script>
    <script src="performance.js"></script>
    <script src="GeneralFunctions.js"></script>
</body>
</html>