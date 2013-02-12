
<!-- header -->
<header>
    <div class="wrapper">
        <!-- 
        <ul id="icons">
            <li><a href="<?php echo CURRENT_PAGE; ?>.php?lang=nb" class="flag_heart"><img src="images/nb_heart.jpg" alt="" /></a></li>
            <li><a href="<?php echo CURRENT_PAGE; ?>.php?lang=en" class="flag_heart"><img src="images/uk-usa-heart.jpg" alt="" /></a></li>
        </ul>
        -->

        <div class="upperlogo">
            <h1><a href="index.php" id="logo">Nico og Silje</a></h1>
            <p>Kjerringøy 22. juni 2013</p>
        </div>
        
        <h2 style="margin-top: 20px; float: right; padding-right: 100px;">Disse sidene er under utvikling...</h2>
    </div>

</header>
<!-- / header -->


<nav>
    <ul>
        <li><a href="index.php<?php echo LINK_PARAMS; ?>"<?php
if (CURRENT_PAGE == 'index') {
    echo 'class="active"';
}
?> >HJEM</a></li>

        <li><a href="hvor.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'hvor') {
                   echo 'class="active"';
               }
?> >KJERRINGØY</a></li>

        <li><a href="overn.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'overn') {
                   echo 'class="active"';
               }
?> >OVERNATTING</a></li>

    </ul>
</nav>
