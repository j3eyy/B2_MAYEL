<?php

<div class="biere">
    <div class="gauche">
            <?php
            if (isset($biere['photo'])) {
                $photo = 'groupe' . $biere['group'] . '/big/' . $biere['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img src="public/images/<?= $photo ?>" alt="photo de <?= $student['firstname'] ?>    <?= $student['lastname'] ?>">        
    </div>
</div>
