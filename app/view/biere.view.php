
<div class="fiche_biere">
    <div class="gauche">
        <figure class="big_photo">
            <?php
            if (isset($produit['photo'])) {
                $photo = 'groupe' . $produit['group'] . '/big/' . $produit['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img src="public/images/<?= $photo ?>" alt="photo de <?= $produit['Libelle'] ?>">
        </figure>
    </div>
    <div class="detail">
        <p class="gout"><?= $produit['Libelle'] ?>
        <p class="gamme"><?= $produit['Gamme'] ?></p>
        <a class="prix" href=""><?= $produit['Prix'] ?></a>
        <p>
            <?= $produit['description'] ?>
        </p>
    </div>
</div>


   