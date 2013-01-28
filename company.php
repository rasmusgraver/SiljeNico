<!DOCTYPE html>
<?php include_once 'shared/language_setter.php'; ?>
<?php define("_CURRENT_PAGE", 'company'); ?>
<html lang="<?php echo "".LANGUAGE; ?>">

  <head>
  <title><?php echo ""._COMPANY; ?></title>
  <style>
    .slideshow {
      position: relative;
      width: 281px;
      height: 185px;
      left: 624px;
      top: 113px;
    }
  </style>
  <?php include("shared/head.html"); ?>
  </head>
  <body class="company">
    <?php include("shared/suggestPost.html"); ?>
    <?php include("shared/navigation.php"); ?>

    <div id="pagewrap">
      <div class="slideshow web">     
        <img src="images/HannibalsBedrift.jpg" width="281" height="185" />
        <img src="images/skarsnutenBedrift.jpg" width="281" height="185" />
        <img src="images/frida.jpg" width="281" height="185" />
        <img src="images/kunde1.jpg" width="281" height="185" />
        <img src="images/kunder2.jpg" width="281" height="185" />
      </div>
      
     <div id="header">
        <a href="main.php<?php echo ""._LINK_PARAMS;?>">
        <img class="logo" src="images/logo.png" alt="logo" width="350" style="padding-bottom: 24px;" />
        </a>
        <h1><?php echo ""._SNAPP_ORDER_FOR_YOUR_RESTAURANT;?></h1>
        <h2><?php echo ""._LET_US_REDUCE_COSTS_INCREASE_SALES;?></h2>
     </div><!--header--><!-- /#header -->
      <div id="contentWrap">
    <?php include("company/sidebar.php"); ?>
    <?php include("company/contentLeft.php"); ?>
      </div><!-- /#contentWrap -->
    </div><!-- /#pagewrap -->
<?php include("shared/footer.html"); ?>
  </body>
</html>
