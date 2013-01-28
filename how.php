<!DOCTYPE html>
<?php include_once 'shared/language_setter.php'; ?>
<?php define("_CURRENT_PAGE", 'how'); ?>
<html lang="<?php echo "".LANGUAGE; ?>">
  <head>
  <title><?php echo ""._HOW; ?></title>
  <?php include("shared/head.html"); ?>
  </head>
  <body class="how">
    <?php include("shared/suggestPost.html"); ?>
     <?php include("shared/navigation.php"); ?>
    <div id="pagewrap">
      <div id="header">
         <h1><?php echo ""._HOW_TO_USE_SNAPPORDER;?></h1>
        <div>
          <a href="main.php<?php echo ""._LINK_PARAMS;?>">
            <img class="logo"  src="images/logo.png" alt="logo" width="350"/>
          </a>
        </div>
      </div><!--header-->

      

      <div id="contentWrap">
        <div id="sidebar">
          <div class="sidebarContent">
            <h2 class="gradient"><?php echo ""._HOW_TO_USE_SNAPPORDER;?></h2>
            <ol>
              <li><?php echo ""._CHOOSE_RESTAURANT;?></li>
              <li><?php echo ""._ENTER_TABLE_NUMBER;?></li>
              <li><?php echo ""._SCROLL_MENU_AND_ADD;?></li>
              <li><?php echo ""._SUBMIT_ORDER;?></li>
              <li><?php echo ""._ENJOY_FOOD_AND_COMPANY;?></li>
              <li><?php echo ""._CLICK_BILL_WHEN_DONE;?></li>
            </ol>
            <?php include("shared/registrerNummer.php"); ?>
            <h2 class="gradient">SnappOrder Bedrift</h2>
            <div style="margin: 15px 10px 10px 10px;">
              <p><?php echo ""._DO_U_WANT_SNAPPORDER_FOR_YOUR_BUSINESS;?></p>
              <a href="company.php<?php echo ""._LINK_PARAMS;?>"><?php echo ""._CLICK_HERE_TO_LEARN_MORE;?></a>
            </div>
            <?php include("shared/topButtonPhone.html"); ?>
            
          </div><!-- /#sidebarContent -->
        </div><!-- /#sidebar -->

        <div id="contentLeft">
          <h2 class="gradient"><?php echo ""._TRY_SIMULATOR_BELOW;?></h2>
          <iframe class="iframe" src="http://demo.snappo.com/customer/"></iframe>
        </div><!--/#contentLeft-->
      </div><!-- /#contentWrap -->
    </div><!-- /#pagewrap -->
    <?php include("shared/footer.html"); ?>
  </body>
</html>