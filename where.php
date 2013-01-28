<!DOCTYPE html>
<?php include_once 'shared/language_setter.php'; ?>
<?php define("_CURRENT_PAGE", 'where'); ?>
<html lang="<?php echo "".LANGUAGE; ?>">
  <head>
  <title><?php echo ""._WHERE;?></title>
  <?php include("shared/head.html"); ?>
  </head>
  <body class="where">
    <?php include("shared/suggestPost.html"); ?>
     <?php include("shared/navigation.php"); ?>
    <div id="pagewrap"> 
      <div id="header">
        <a href="main.php<?php echo ""._LINK_PARAMS;?>">
          <img class="logo" src="images/logo.png" alt="logo" width="350" style="padding-bottom: 24px;" />
        </a>
        <h1><?php echo ""._SNAPP_ORDER_MERCHANTS;?></h1>
        <h2><?php echo ""._SNAPP_ORDER_MOTTO;?></h2>
      </div><!--header-->

      
      <div id="contentWrap">
        <div id="sidebar"><!-- float right -->
          <div class="sidebarContent">  
            <h2 class="gradient">SnappOrder Bedrift</h2>
            <div style="margin: 15px 10px 10px 10px;">
              <p><?php echo ""._DO_U_WANT_SNAPPORDER_FOR_YOUR_BUSINESS;?></p>
              <a href="company.php<?php echo ""._LINK_PARAMS;?>"><?php echo ""._CLICK_HERE_TO_LEARN_MORE; ?></a>
            </div>
            <div class="iphoneContent">
              <h2 class="gradient"><?php echo ""._SNAPP_ORDER_REASTAURANTS;?></h2>
              <?php include("shared/restauranter.php"); ?>
              <?php include("shared/topButtonPhone.html"); ?>  
            </div>                          
          </div><!-- /#sidebarContent -->
        </div><!-- /#sidebar -->


        <div id="contentLeft">
          <h2 class="gradient"><?php echo ""._SNAPP_ORDER_REASTAURANTS;?></h2>
          <?php include("shared/restauranter.php"); ?>
        </div>
        <!-- /#contentLeft -->

      </div>
      <!-- /#contentWrap -->
    </div>
    <!-- /#pagewrap -->

    <?php include("shared/footer.html"); ?>

  </body>
</html>
