<!DOCTYPE html>
<?php include_once 'shared/language_setter.php'; ?>
<?php define("_CURRENT_PAGE", 'main'); ?>
<html lang="<?php echo "".LANGUAGE; ?>">
  <head>
  <title>SnappOrder</title>
  <?php include("shared/head.html"); ?>
  </head>
  <body class="home main">
    <?php include("shared/suggestPost.html"); ?>
    <?php include("shared/navigation.php"); ?>

    <div id="pagewrap">


      <div id="header">
        <img class="logo" src="images/logo.png" alt="logo" width="350" style="padding-bottom: 24px;">
        <h1><?php echo ""._PAGE_MOTTO;?></h1>
        <p style="width: 500px;"><?php echo ""._PAGE_MOTTO_TEXT;?></p>
        <p style="font-weight: bold; font-size:18px; padding-top:5px;">
          <a href="how.php<?php echo ""._LINK_PARAMS;?>"><?php echo ""._READ_MORE_AND_TRY_SIMULATOR;?></a></p>
<?php include("shared/facebookLike.html"); ?>
      </div>
      <!--header-->

      <div id="contentWrap">
        <div id="sidebar"><!-- Float right -->
          <div class="iphoneContent">
<?php include("shared/registrerNummer.php"); ?>  
            <h2 class="gradient">Facebook</h2>
            <div class="fb-like-box" style="background-color: white; width: 100%;padding-left: 10px;" data-href="http://www.facebook.com/SnappOrder" 
                 data-width="316" data-height="257" data-show-faces="true" data-stream="false" data-header="false" border_color="white"></div> 
<?php include("shared/topButtonPhone.html"); ?>
          </div>
          <div class="sidebarContent">
            <h2 class="gradient"><?php echo ""._NEWS;?></h2>
            <ul>            
              <li>
                  <a href="http://www.tv2.no/underholdning/hjelperdeg/oel-servert-paa-bordet-uten-aa-staa-i-koe-eller-vente-paa-kelneren-3816132.html">
                    <img src="images/tv2_logo.jpg" alt="tv2" width="70" height="70" style="float:left; margin: 0px 20px 0px 0px;" />
                  </a>
              </li>
              <li>
                  <?php echo ""._NEWS_TV2_FF;?>
                  <br /><a href="http://www.tv2.no/underholdning/hjelperdeg/oel-servert-paa-bordet-uten-aa-staa-i-koe-eller-vente-paa-kelneren-3816132.html">
                      Les artikkelen</a>
              </li>
              <li>
                  <a href="http://www.besoksliv.se/artikel/norsk-krogapp-vill-bli-nummer-ett-26588">
                    <img src="images/besoksliv_logo.png" alt="besoksliv" width="70" height="50"  style="float:left; margin: 0px 20px 0px 0px;">
                  </a>
              </li>
              <li>
                  Besøksliv.se: Norsk krogapp vill bli nummer ett
                  <br /><a href="http://www.besoksliv.se/artikel/norsk-krogapp-vill-bli-nummer-ett-26588">
                      Les artikkelen</a>
              </li>
            </ul>
            <h2 class="gradient"><?php echo ""._WANT_TO_WORK_WITH_US;?></h2>
            <div style="margin: 15px 10px 10px 10px;">
              <p><?php echo ""._LOOKING_FOR_A_DEVELOPER;?></p>
              <a href="job.php<?php echo ""._LINK_PARAMS;?>"><?php echo ""._CLICK_FOR_JOB_DESCRIPTION;?></a>
            </div>

            <!--<?php include("shared/snapporderBedrift.html"); ?> -->          
          </div><!-- /#sidebarContent -->
        </div><!-- /#sidebar -->

        <div id="contentLeft">
<?php include("shared/registrerNummer.php"); ?>
        </div><!--contentLeft-->

      </div>
      <!-- /#contentLeftWrap -->
    </div><!-- /#pagewrap -->
<?php include("shared/footer.html"); ?>
  </body>
</html>
