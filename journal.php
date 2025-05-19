<html>
<head>
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="GeneralButtons.css">
    <link rel="stylesheet" href="header_content.css">
    <link rel="stylesheet" href="journal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <!--Header Content-->
    <?php include 'header_content.php'; ?>

    <!--Core Content-->
    <div class="core-content">

        <!--Journal Table-->
        <div class="journal-container">
            <h1>Trades</h1>

            <div class="button-container">
                <div class="general-button__style1-gb"><p>Open</p></div>
                <div class="general-button__style1-gb"><p>Closed</p></div>
                <div class="general-button__style1-gb"><p>All</p></div>
            </div>

            <div class="table-container">
                <table id="trading-journal">
                    <thead>
                        <tr>
                            <th>Stock</th>
                            <th>Quantity</th>
                            <th>Type</th>
                            <th>Experation Date</th>
                            <th>Profit</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

        
        <div class="sideMenu-container">      
            <div class="performance-button selection" data-url="performance.php">
                <img id="performance-button__img">
            </div>
        </div>
    </div>

    <script src="header_content.js"></script>
    <script src="journal.js"></script>
    <script src="GeneralFunctions.js"></script>
</body>
</html>