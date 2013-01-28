<!DOCTYPE html>
<?php include_once 'shared/language_setter.php'; ?>
<?php define("_CURRENT_PAGE", 'products'); ?>
<html lang="<?php echo "" . LANGUAGE; ?>">
    <head>
        <title>SnappOrder</title>
        <?php include("shared/head.html"); ?>
    </head>
    <body class="products">
        <?php include("shared/suggestPost.html"); ?>
        <?php include("shared/navigation.php"); ?>
        <div id="pagewrap">

            <div>
                <br>
                <h1>SnappOrder product family</h1>
                <br>
                <p></p>
            </div>
            <div class="mainContainer">
                 <div class="container">
                    <a href="TakeAway.php">
                        <div>                    
                            <h1>SnappOrder</h1>
                            <h2>Take-away</h2>

                            <img src="images/iStock_000017883945Large.jpg" alt="Productpage Take-away" width="380" height="250">
                            <br>
                            <p>SnappOrder allows your customers to browse the menu and place orders with their mobile phone. Prepaid purchase allows food to be picked up quickly.</p>
                        </div>
                    </a>

                </div>
                <div class="container">
                    <a href="SnappWaiter.php">
                        <div>
                            <h1>SnappWaiter</h1>
                            <h2>Mobile POS</h2>
                            <img src="images/iStock_000010513909Large.jpg" alt="Productpage SnappWaiter" max-width="380" height="250">
                            <br>
                            <p>SnappWaiter allows your waiters to receive orders with a handheld unit and not leave the zone where the money is made</p>
                        </div> 
                    </a>

                </div>
                <div class="container">
                    <a href="TableServing.php">
                        <div>                    
                            <h1>SnappOrder</h1>
                            <h2>The invisible waiter</h2>

                            <img src="images/iStock_000017774874Large.jpg" alt="Productpage SnappOrder Tableservice" width="380" height="250">
                            <br>
                            <p>SnappOrder allows your customers to browse the menu and place orders with their mobile phone</p>
                        </div>
                    </a>                
                </div>
               
                <div class="container">
                    <a href="SnappMenu.php">
                        <div>                    
                            <h1>SnappMenu</h1>
                            <h2>Digital menu</h2>

                            <img src="images/sangiovese.png" alt="Productpage SnappMenu" width="380" height="250">
                            <br>
                            <p>SnappMenu presents your menu at its finest, providing whatever information you would like to give your guest.</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <!-- /#contentLeftWrap -->
    </div><!-- /#pagewrap -->
    <?php include("shared/footer.html"); ?>
</body>
</html>
