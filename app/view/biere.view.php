<div class="fiche_biere">
    <section id="labiere">
        <img id="produit" src="<?= htmlspecialchars($beer['image']) ?>" alt="<?= htmlspecialchars($beer['nom']) ?>" width="20%" />
        
        <section class="info">
            <div class="Titre_biere">
                <?= htmlspecialchars($beer['nom']) ?>
            </div>
            <p class = "description" >
                <?= htmlspecialchars($beer['description']) ?>
            </p>
            <div class="prix-panier">
                <p class="prix">
                    <?= htmlspecialchars($beer['prix']) ?>
                </p>
                <a class="achat" href="#">Ajouter au panier</a>
            
            </div>
            <p class ="livraison">Livraison Gratuite à partir de 50€ en France.</p>
        </section>
    </section>
</div>
        

</div>
