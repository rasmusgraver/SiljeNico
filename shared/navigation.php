
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
