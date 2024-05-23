
<!doctype html>


<html lang="fr">


	<head>

		<meta charset="utf-8">
		<title>Mayel - Nos bières</title>
        <link rel="shortcut icon" href="images/logo.png" />
		<meta name="viewport" content="initial-scale=1.0; width=device-width">
		<link rel="stylesheet" href="Nos bières.css" />
        <link href="https://fonts.cdnfonts.com/css/futura-lt" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/futura-std-4" rel="stylesheet">

	</head>
    
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif ?>
    <title><?= $nomDePage ?></title>
</head>
<

<header>
        <nav>
        <ul>
            <li>
                <div class="biere">
                    <a href="biere.php">NOS BIERES</a>
                </div>
            </li>

            <li>
                <div class="brasserie">
                    <a href="brasserie.php">BRASSERIE</a>
                </div>
            </li>

            <li>
                <div class="logo">
                    <a href="accueil.php"><img src="public\images\logo_mayel_blanc.png"></a>
                </div>
            </li>

            <li>
                <div class="fabrication">
                    <a href="fabrication.php">FABRICATION</a>
                </div>
            </li>

            <li>
                <div class="contact">
                    <a href="contact.php">CONTACT</a>
                </div>
            </li>
        </ul>
        </nav>
    </header>