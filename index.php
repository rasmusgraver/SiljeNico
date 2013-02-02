<!DOCTYPE html>
<?php define("CURRENT_PAGE", 'index'); ?>
<?php include("shared/language_setter.php"); ?>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <?php include("shared/head.html"); ?>
    </head>
    <body class="index">

        <?php include("shared/header.php"); ?>


        <div class="body3">
            <div class="main whiteback">
                <!-- content -->
                <article id="content">
                    <div class="text_wrapper">
                        <div class="wrapper">
                            <div class="pad">
                                <h2><?php echo WELCOME_HEAD; ?></h2>
                                <?php echo WELCOME_TEXT; ?>
                            </div>
                        </div>

                        <div class="wrapper">
                            <div class="pad">
                                <h2><?php echo TRANSPORT_HEAD; ?></h2>
                                <h3><?php echo TRANSPORT_PLANE_HEAD; ?></h3>
                                <ul>
                                    <li>SAS: <a href="http://www.sas.no">www.SAS.no</a></li>
                                    <li>Norwegian: <a href="http://www.Norwegian.no">www.Norwegian.no</a></li>
                                </ul>
                                <br />
                                <h3><?php echo TRANSPORT_BUSS_HEAD; ?></h3>
                                <?php echo TRANSPORT_BUSS_TEXT; ?>
                            </div>
                        </div>
                    </div>
                    <div class="image_wrapper">
                        <img src="images/nicoSiljeSjo.jpg" alt="" />
                        <img src="images/nicoSiljeSkogen.jpg" alt="" />
                        <img src="images/nicoSiljeSnowTopp.jpg" alt="" />
                        <img src="images/nicoSiljNat.jpg" alt="" />
                        <img src="images/nicoSiljPar.jpg" alt="" />
                    </div>
                </article>
                <!-- content / -->
            </div>
        </div>

    </body>
</html>