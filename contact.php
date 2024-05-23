<?php

$nomDePage = "contact";
$css_attribuee = "public/css/fabrication.css";

ob_start();
include 'app/view/fabrication.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?> 