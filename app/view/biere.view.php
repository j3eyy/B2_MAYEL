<div class="fiche_biere">
    <div class="biere">
        <div class="Titre_biere"><?= htmlspecialchars($beer['nom']) ?></div>
        <figure class="big_photo">
            <div class="photo">
                <img src="<?= htmlspecialchars($beer['image']) ?>" alt="<?= htmlspecialchars($beer['nom']) ?>" width="20%" />
            </div>
            <div class="description_biere">
                <p><?= htmlspecialchars($beer['description']) ?></p>
            </div>
            <button><a href="#">Ajouter au panier</a></button>
        </figure>
    </div>
</div>