<div class="fiche_biere">
    <div class="gauche">
        <?php foreach ($bieresIntense as $showroom) : ?>
            <div class="Titre_biere"><?= $showroom['nom'] ?></div>

            <figure class="big_photo">
                <div class="photo">

                    <div class="photo">

                        <img src="<?= $showroom['image'] ?>" alt="<?= $showroom['nom'] ?>" width=20% /></a>
                    </div>

                    <div class="description_biere">
                        <p><?= $showroom['description'] ?></p>
                    </div>
                    <button><a href="">Ajouter au panier</a></button>
        <?php endforeach ?>