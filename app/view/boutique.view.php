
<?php foreach ($showroom as $aShowroom): ?>
    <div class="carte">
      <a href="boutique.php?num=<?= $aShowroom['id'] ?>">
        <?php 
          if (isset($aShowroom['photo'])) {
            $photo = 'groupe' . $aShowroom['group'] . '/small/' . $aShowroom['photo'];
          } else {
            $photo = 'defaut.png';
          }
?>