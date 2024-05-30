
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
        <p class="nom"><?= $produit['Gamme'] ?> <span><?= $produit['lastname'] ?></span></p>
        <p class="ddn"><?= $produit['birthdate'] ?></p>
        <p class="groupe">groupe <span><?= $produit['group'] ?></span></p>
        <p>
            <?= $produit['description'] ?>
        </p>
    </div>
</div>


   