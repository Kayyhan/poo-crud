<?php ob_start() ?>


<?php
$content = ob_get_clean();
$titre = "La page d'accueil";
require "template.php";
?>