<div id="navigation">
  <div class="navigationCenter">
    <ul style="float: left; margin: 15px auto;list-style: none;">

      <li><a href="main.php<?php echo ""._LINK_PARAMS;?>"       <?php if(_CURRENT_PAGE == 'main')     {echo 'class="gradient selected"';} ?>><?php echo ""._HOME;?></a></li>
      <li><a href="products.php<?php echo ""._LINK_PARAMS;?>"   <?php if(_CURRENT_PAGE == 'products') {echo 'class="gradient selected"';} ?>><?php echo ""._PRODUCTS;?></a></li>
      <li><a href="how.php<?php echo ""._LINK_PARAMS;?>"        <?php if(_CURRENT_PAGE == 'how')      {echo 'class="gradient selected"';} ?>><?php echo ""._HOW;?></a></li>
      <li><a href="where.php<?php echo ""._LINK_PARAMS;?>"      <?php if(_CURRENT_PAGE == 'where')    {echo 'class="gradient selected"';} ?>><?php echo ""._WHERE;?></a></li>
      <li><a href="company.php<?php echo ""._LINK_PARAMS;?>"    <?php if(_CURRENT_PAGE == 'company')  {echo 'class="gradient selected"';} ?>><?php echo ""._COMPANY;?></a></li>
      <li><a href="faq.php<?php echo ""._LINK_PARAMS;?>"        <?php if(_CURRENT_PAGE == 'faq')      {echo 'class="gradient selected"';} ?>><?php echo ""._FAQ;?></a></li>


      <?php
      if(LANGUAGE != 'nb')
      {
          ?>
        <li><a href="<?php echo "".$_SERVER['PHP_SELF']."?lang=nb"; ?>" <?php if(defined("norwegian")) {echo 'class="gradient selected"';} ?>><img src="images/norwegianFlag.png" style="height:24px"/></a></li>          
      <?php
      }
      if(LANGUAGE != "en")
      {
          ?>
              <li><a href="<?php echo "".$_SERVER['PHP_SELF']."?lang=en"; ?>" <?php if(defined("english")) {echo 'class="gradient selected"';} ?>><img src="images/englishFlag.png" style="height:24px" /></a></li>          
          <?php
      }
      if(LANGUAGE != "sv")
      {
          ?>
              <li><a href="<?php echo "".$_SERVER['PHP_SELF']."?lang=sv"; ?>" <?php if(defined("swedish")) {echo 'class="gradient selected"';} ?>><img src="images/swedishFlag.png" style="height:24px"/></a></li>
          <?php
      }      
      ?>

    </ul>
  </div>
</div>
