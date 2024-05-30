
<div class="fiche_biere">
    <div class="gauche">
        <figure class="big_photo">
            <?php
            if (isset($aShowroom['photo'])) {
                $photo = 'groupe' . $aShowroom['group'] . '/big/' . $aShowroom['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img src="public/images/<?= $photo ?>" alt="photo de <?= $aShowroom['firstname'] ?> <?= $aShowroom['lastname'] ?>">
        </figure>
    </div>
    <div class="detail">
        <p class="nom"><?= $aShowroom['firstname'] ?> <span><?= $aShowroom['lastname'] ?></span></p>
        <p class="ddn"><?= $aShowroom['birthdate'] ?></p>
        <p class="groupe">groupe <span><?= $aShowroom['group'] ?></span></p>
        <p>
            <?= $aShowroom['description'] ?>
        </p>
    </div>
</div>


   