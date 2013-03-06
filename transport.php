<!DOCTYPE html>
<?php define("CURRENT_PAGE", 'transport'); ?>
<?php include("shared/language_setter.php"); ?>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <?php include("shared/head.html"); ?>
    </head>
    <body class="index">

        <?php include("shared/header.php"); ?>
        <?php include("shared/navigation.php"); ?>
        <div class="main">
            <div class="whiteback">

                <article id="content">

                    <div class="text_wrapper">

                        <?php include("transport_" . LANG . ".php"); ?>

                    </div>
                    <div class="image_wrapper">
                        <img src="images/nicoSiljNat.jpg" alt="" />
                        <img src="images/nicoSiljPar.jpg" alt="" />
                        <img src="images/nicoSiljeSjo.jpg" alt="" />
                    </div>

                </article>

            </div>
        </div>

    </body>
</html>
