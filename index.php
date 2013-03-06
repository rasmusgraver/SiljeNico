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
        <?php include("shared/navigation.php"); ?>
        <div class="main">
            <div class="whiteback">
                <!-- content -->
                <article id="content">
                    <div class="text_wrapper">
                        
                        <?php include("index_" . LANG . ".php"); ?>
                        
                    </div>
                    <div class="image_wrapper">
                        <img src="images/nicoSiljeSjo.jpg" alt="" />
                        <img src="images/nicoSiljeSkogen.jpg" alt="" />
                        <img src="images/nicoSiljeSnowTopp.jpg" alt="" />
                    </div>
                </article>
                <!-- content / -->
            </div>
        </div>

    </body>
</html>