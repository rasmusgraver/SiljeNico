<!DOCTYPE html>
<?php define("CURRENT_PAGE", 'index'); ?>
<html>
    <head>
        <title>Silje og Nico Bryllup!</title>
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
                            <h2>Velkommen!</h2>
                            <figure class="img1"><img src="images/page1_img1.jpg" alt=""></figure>
                            <p>Noe kos her</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl </p>

                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="pad_left1">
                            <section class="cols">
                                <div class="box1">
                                    <div class="inner">
                                        <h2>Overnatting</h2>
                                        <div class="wrapper"> <span class="dropcap1">01</span>
                                            <div class="col1">
                                                <p> <a href="#" class="link1">Wedding Planner</a><br>
                                                    Sed ut perspiciatis unde omiste natueror vouptatem accusantium doloremque laudantium totamm aperiam eaque ipsa quae ab illo inventore veritatis. </p>
                                            </div>
                                        </div>
                                        <div class="wrapper"> <span class="dropcap1">02</span>
                                            <div class="col1"> <a href="#" class="link1">Photographer</a><br>
                                                Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptasit aspernatur aut odit quia consequuntur magni est. </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="cols pad_left2">
                                <div class="box1">
                                    <div class="inner">
                                        <h2>Our <span>Couple</span></h2>
                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="images/page1_img2.jpg" alt=""></figure>
                                            <p> At vero eos et accusamus et iusto odio dignissimos ducimus nditis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non. </p>
                                            Provident similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expecumque nihil impedit quo minus id quod. </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </article>

            </div>
        </div>

    </body>
</html>