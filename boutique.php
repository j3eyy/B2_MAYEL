<?php
session_start();

$nomDePage = "Boutique";
$css = "boutique.css";

include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';
include 'app/view/common/header.php';

$pdo = getDatabaseConnexion();



if(isset($_SESSION['avertissement'])) {
    $message = $_SESSION['avertissement'];
    unset($_SESSION['avertissement']);
}


$page_title = 'boutique';


ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();


echo "<main>\n";
echo "        <style>\n";
echo "            @import url(\'https://fonts.cdnfonts.com/css/futura-lt\');\n";
echo "            @import url(\'https://fonts.cdnfonts.com/css/futura-std-4\');\n";
echo "        </style>\n";
echo "    <div class=\"intense\">\n";
echo "        <h1>INTENSE</h1>\n";
echo "            \n";
echo "        <div class=\"kiwi\">\n";
echo "            <a href=\"Pages des bières/Kiwi.html\"><img src=\"app/public/images/kiwimenthe.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"fraise\">\n";
echo "            <a href=\"Pages des bières/Fraise.html\"><img src=\"app/public/images/fraiserhu.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"yuzu\">\n";
echo "            <a href=\"Pages des bières/Yuzu.html\"><img src=\"app/public/images/yuzulitchi.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"hibiscus\">\n";
echo "            <a href=\"Pages des bières/Hibiscus.html\"><img src=\"app/public/images/hibiscus.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"chocolat\">\n";
echo "            <a href=\"Pages des bières/Chocolat.html\"><img src=\"app/public/images/chocolat.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"vanille\">\n";
echo "            <a href=\"Pages des bières/Vanille.html\"><img src=\"app/public/images/vanille.jpg\" width=20% /></a>\n";
echo "        </div>\n";
echo "        <div class=\"prestige\">\n";
echo "            <h1>PRESTIGE</h1>\n";
echo "        </div>\n";
echo "        <div class=\"safran\">\n";
echo "            <a href=\"Pages des bières/Safran.html\"><img src=\"app/public/images/safran.jpg\" width=20%/></a>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "        </br>\n";
echo "    </main>\n";

include 'app/view/common/footer.php';
?>


