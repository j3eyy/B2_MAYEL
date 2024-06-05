
<div class="fiche_biere">
    <div class="gauche">

    <div class="Titre_biere"><?= $aShowroom['nom'] ?></div>
        
    <figure class="big_photo">
        <div class="photo">
        <?php foreach ($showroom as $aShowroom): ?>
<div class="photo">

 <img src="public/images/<?= $aShowroom['photo'] ?>" alt="<?= $aShowroom['Libelle'] ?>" width=20% /></a>
    </div>

    <div class="description_biere"><p><?= $bieresIntense['description'] ?></p></div>
    <button ><a>Ajouter au panier</a></button>
<?php endforeach ?>
