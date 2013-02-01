<!DOCTYPE html>
<?php define("CURRENT_PAGE", 'hvor'); ?>
<?php include("shared/language_setter.php"); ?>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <?php include("shared/head.html"); ?>
    </head>
    <body class="index">
        <div class="body1">
            <div class="main">
                <?php include("shared/header.php"); ?>
            </div>
        </div>


        <div class="body3">
            <div class="main whiteback">
                <!-- content -->
                <article id="content">
                    <div class="wrapper">
                        <div class="pad">
                            <h2><?php echo KJERR_HEAD; ?></h2>
                            <img src="images/kjerr11.jpg" alt="kjerringoy" />
                            <p><?php echo KJERR_TEXT; ?></p>
                            <p></p>
                            
                        </div>
                    </div>
                </article>
                <!-- content / -->
            </div>
        </div>

    </body>
</html>