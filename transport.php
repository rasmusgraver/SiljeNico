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

                <article id="content" class="<?php echo CURRENT_PAGE; ?>">

                    <div class="text_wrapper">
                        <div class="wrapper">
                            <div class="pad">
                                <?php include("transport_" . LANG . ".php"); ?>

                            </div>
                        </div>

                    </div>
                    <div class="image_wrapper">
                        <img src="images/nicoSiljNat.jpg" alt="" />
                        <img src="images/nicoSiljPar.jpg" alt="" />
                    </div>

                </article>

            </div>
        </div>

        <iframe src="http://doodle.com/t2pqfrfugu5pts7g"
                style="width: 1000px; height: 1100px;"
                ></iframe>


    </body>
</html>
