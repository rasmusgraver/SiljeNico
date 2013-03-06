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

                    <?php include("transport_" . LANG . ".php"); ?>

                </article>

            </div>
        </div>

    </body>
</html>
