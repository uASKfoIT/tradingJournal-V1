<html>
<head>
    <link rel="stylesheet" href="header_content.css">
    <link rel="stylesheet" href="trade.css">
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="GeneralInputBoxes.css">
    <link rel="stylesheet" href="GeneralText.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css">
</head>

<body>
    <!--Header Content-->
    <?php include 'header_content.php'; ?>

    <!--Main Content-->
        <div class="tradecontent-container">
            <!--Trade Selection-->
            <div class="trade-selection">
                <div class="trade-selection__option" id="option"><h4>Option</h4></div>
                <div class="trade-selection__stock" id="stock"><h4>Stock</h4></div>
            </div>

            <!--FORM-->
            <form class="trade-form" action="/submit" method="POST">
                <!--Option Form-->
                <div class="trade-form__container" id="option-form">

                    <div class="trade-form__row">
                        <div class="trade-form__row-largebox">

                            <div class="stock-searchbox">
                                <span class="glyphicon glyphicon-search"></span>
                                <input type="text" class="stockSymbol" id="stockSymbol" placeholder="search stock" name="option_stockSymbol" >
                            </div>

                            <div class="stockinfo">
                                <div class="stockinfo__box">
                                    <img id="stockinfo__image-id" class="stockinfo__image-id">
                                </div>

                                <div class="stockinfo__box">
                                    <label class="checkbox-container" id="call-container"> 
                                        <label class="checkbox-label">CALL</label>
                                        <input type="checkbox" id="call-checkbox" name="call_checkbox">
                                        <span class="check-box"></span>
                                    </label>
                                    <label class="checkbox-container" id="put-container">
                                        <label class="checkbox-label">PUT</label>
                                        <input type="checkbox" id="put-checkbox" name="put_checkbox">
                                        <span class="check-box"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="stock-suggestion" class="suggestions" id="suggestions"></div>

                        </div>
                    </div>

                    <div class="trade-form__row">
                        <div class="trade-form__row-box">
                            <div class="trade-form__inputfield">
                                <label class="TNR-small__black">Experation Date</label><br>
                                <input class="inputBox__style2" type="text" id="experation-date" name="option_experationDate" required>
                            </div>
                            <div class="trade-form__inputfield">
                                <label class="TNR-small__black" >Purchase Price</label><br>
                                <input class="inputBox__style2" type="number" min="0.01" step="0.01" name="option_purchasePrice" required>
                            </div>
                            <div class="trade-form__inputfield">
                                <label class="TNR-small__black">Contracts</label><br>
                                <input class="inputBox__style2" type="number" min="1" name="option_contracts" required>
                            </div>
                        </div>

                        <div class="trade-form__row-box">
                            <label class="note-label" >Note:</label>
                            <div class="note_container">
                                 <input type="text">

                            </div>

                            <div class="pattern-container">
                                <div class="pattern-selection">
                                    <h4>Select Pattern</h4>
                                    <div id="pattern-dropdown"></div>

                                </div>

                                <div class="pattern-image" id="pattern-image-container" >
                                    <img id="pattern-image">
                                    <!--<input type="file" class="image-file" accept="image/*" style="display: none;" name="image-file">--> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Stock Form-->
                <div class="trade-form__container" id="stock-form">
                    <div class="trade-form__row">
                        <div class="trade-form__row-largebox">
                            <div class="stock-searchbox">
                                <span class="glyphicon glyphicon-search"></span>
                                <input type="text" class="stockSymbol" id="stockSymbol" placeholder="search stock" name="stock_stockSymbol" >
                            </div>
                            <div class="stockinfo">
                                <div class="stockinfo__box">
                                    <img id="stockinfo__image-id" class="stockinfo__image-id">
                                </div>
                            </div>
                            <div class="stock-suggestion" class="suggestions" id="suggestions"></div>
                        </div>
                    </div>

                    <div class="trade-form__row">
                        <div class="trade-form__row-box">
                            <div class="trade-form__inputfield">
                                <label class="TNR-small__black">Purchase Price</label><br>
                                <input class="inputBox__style2" type="number" min="0.01" step="0.01" name="stock_purchasePrice" required>
                            </div>
                            <div class="trade-form__inputfield"></div>
                            <div class="trade-form__inputfield">
                                <label class="TNR-small__black">Shares</label><br>
                                <input class="inputBox__style2" type="number" min="1" name="stock_shares" required>
                            </div>
                        </div>

                        
                        <div class="trade-form__row-box">
                            <div class="note_container">

                            </div>

                            <div class="pattern-container">
                                <div class="pattern-selection">

                                </div>

                                <div class="pattern-image">

                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!---->
            
            
                <div class="trade__button-container">
                    <div class="trade__general-button">
                        <p>POST</p>   
                        <input class="trade__hidden-submit" type="submit">
                    </div>
                </div>
            </form>
        </div>



    <script src="header_content.js"></script>
    <script src="trade.js" type="module"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>