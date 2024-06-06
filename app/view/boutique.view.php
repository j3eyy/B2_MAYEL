
<?php foreach ($bieres as $id => $showroom): ?>
    <a href="biere.php?id=<?= $id ?>">
        <img src="<?= htmlspecialchars($showroom['image']) ?>" alt="<?= htmlspecialchars($showroom['nom']) ?>" width="20%" />
    </a>

<?php endforeach;