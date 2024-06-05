<div class="fiche_biere">
    <class="biere">
        
            
                <img id="produit" src="<?= htmlspecialchars($beer['image']) ?>" alt="<?= htmlspecialchars($beer['nom']) ?>" width="20%" />
            
            <div class="Titre_biere"><?= htmlspecialchars($beer['nom']) ?></div>
            
                <p><?= htmlspecialchars($beer['description']) ?></p>
            
            <button class="achat"><a href="#">Ajouter au panier</a></button>
        
    </div>
</div>