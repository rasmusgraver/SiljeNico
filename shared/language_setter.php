<?php

if($_GET['lang']=="nb") {
    include 'language_nb.php';
} elseif($_GET['lang']=="en") {
    include 'language_en.php';
} else {
    include 'language_nb.php';
}

?>