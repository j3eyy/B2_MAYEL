
<?php foreach ($showroom as $aShowroom): ?>
    <div class="carte">
      <a href="fiche.php?num=<?= $aStudent['id'] ?>">
        <?php 
          if (isset($aStudent['photo'])) {
            $photo = 'groupe' . $aShowroom['group'] . '/small/' . $aShowroom['photo'];
          } else {
            $photo = 'defaut.png';
          }
        ?>