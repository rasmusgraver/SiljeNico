<!DOCTYPE html>
<?php define("CURRENT_PAGE", 'overn'); ?>
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
                    <div class="wrapper">
                        <div class="pad">
                            <h2>Rom-Fordeling</h2>
                            <p>Da er oversikten over rom og hytter klar!</p>
                            <a href="overn_oversikt.php">Oversikt over fordeling av hytter og rom</a>

                            <?php include("overn_" . LANG . ".php"); ?>
                            
                        </div>
                    </div>
                </article>

            </div>
        </div>

    </body>
</html>
