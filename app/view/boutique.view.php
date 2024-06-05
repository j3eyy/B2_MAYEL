<?php foreach ($bieres as $id => $showroom): ?>
<div class="photo">
    <a href="biere.php?id=<?= $id ?>">
        <img src="<?= htmlspecialchars($showroom['image']) ?>" alt="<?= htmlspecialchars($showroom['nom']) ?>" width="20%" />
    </a>
</div>
<?php endforeach; ?>