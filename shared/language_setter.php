<?php
if ($_GET['lang'] == "nb") {
    include 'language_set_nb.php';
} elseif ($_GET['lang'] == "sv") {
    include 'language_set_sv.php';
} elseif ($_GET['lang'] == "en") {
    include 'language_set_en.php';
} else {
    include 'language_set_nb.php'; // Default
}
?>