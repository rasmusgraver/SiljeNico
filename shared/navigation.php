
<nav>
    <ul>
        <li><a href="index.php<?php echo LINK_PARAMS; ?>"<?php
if (CURRENT_PAGE == 'index') {
    echo 'class="active"';
}
?> ><?php echo HOME; ?></a></li>

        <li><a href="hvor.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'hvor') {
                   echo 'class="active"';
               }
?> >KJERRINGØY</a></li>

        <li><a href="overn.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'overn') {
                   echo 'class="active"';
               }
?> ><?php echo OVERN; ?></a></li>

        <li><a href="forl.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'forl') {
                   echo 'class="active"';
               }
?> ><?php echo FORL; ?></a></li>

        <li><a href="transport.php<?php echo LINK_PARAMS; ?>"<?php
               if (CURRENT_PAGE == 'transport') {
                   echo 'class="active"';
               }
?> ><?php echo TRANSPORT; ?></a></li>

        
        
    </ul>
</nav>
