<?php

$nomDePage = "contact";
$css_attribuee = "public/css/contact.css";

ob_start();
include 'app/view/conctact.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
