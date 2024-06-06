<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasserie</title>
    <link rel="stylesheet" type="text/css" href="public/css/brasserie.css" />
</head>

<body>

    <section id="emplacement">
        <div class="img-bra">
            <img src="public\images\mayel_post.jpg" alt="img Brasserie">
        </div>
        <div class="info">
            <h1>MAYEL - BRASSERIE</h1>
            <p>13 rue Molière | Compl. 75013, Paris 13e</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2459089257884!2d2.3499023156754704!3d48.83322117928578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d699ba5a3f%3A0x408ab2ae4bb5c50!2s13%20Rue%20Moli%C3%A8re%2C%2075013%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1622102379366!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </iframe>
    </section>

    <main>
        <div id="histoire">
            <h2 class="titre">À PROPOS DE NOUS</h2>
            <section>
            <div id="Nous">
                <p>
                    Née de l'aventure d'un groupe de jeunes passionnés à la recherche de nouvelles saveurs, Mayel a établi son restaurant bistronomique dans le Troisième arrondissement de Paris.

                    <br> Souhaitant magnifier leurs plats d'exception, ils ont développé une bière artisanale haut de gamme, brassée localement en collaboration avec des producteurs du monde entier.

                    <br> Avec une distribution exclusive, Mayel incarne la sophistication et le raffinement, offrant une expérience gustative unique.
                </p>
                </div>
            </section>
        </div>

        <h3 class="titres">Fondateurs</h3>
        
        <section>
        <div id="fondateur">
            
            <?php foreach ($students as $etudiant) : ?>
                <a href="fiche.php?num=<?= $etudiant['id'] ?>"><img src="public\images\<?=$etudiant['Photo']?>" alt="Amin Miladi"></a>
                <p><?= $etudiant['nom'] ?></p>
            <?php endforeach ?>
        </section>
    </div>
    </main>

</body>

</html>
