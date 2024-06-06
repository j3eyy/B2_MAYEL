<link rel="stylesheet" href="trombi.css">
<div class="fiche">
    <div class="gauche">
        <figure class="big_photo">
            <?php
            if (isset($student['photo'])) {
                $photo = 'groupe' . $student['group'] . '/big/' . $student['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img class="photo" src="public/images/<?= $student['Photo']?>" alt="photo de <?= $student['prenom'] ?> <?= $student['nom'] ?>">
        </figure>
    </div>
    <div class="detail">
        <p class="nom"><?= $student['prenom'] ?> <span><?= $student['nom'] ?></span></p>
        <p class="date"><?= $student['date'] ?></p>
        <p class="groupe">groupe <span><?= $student['groupe'] ?></span></p>
        <p>
            <?= $student['description'] ?>
        </p>
    </div>
</div>
