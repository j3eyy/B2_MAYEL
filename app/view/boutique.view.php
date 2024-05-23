

<!-- Bryan -->
<main>
        <!-- <style>
            @import url('https://fonts.cdnfonts.com/css/futura-lt');
            @import url('https://fonts.cdnfonts.com/css/futura-std-4');
        </style> -->

        <div class="intense">
            <h1>INTENSE</h1>
        </div>
            
        <div class="kiwi">
            <a href="Pages des bières/Kiwi.html"><img src="public\images\kiwimenthe.jpg" width=20% /></a>
        </div>

        <div class="fraise">
            <a href="Pages des bières/Fraise.html"><img src="public\images\fraiserhu.jpg" width=31% /></a>
        </div>

        <div class="yuzu">
            <a href="Pages des bières/Yuzu.html"><img src="public\images\yuzulitchi.jpg" width=73% /></a>
        </div>

        <div class="hibiscus">
            <a href="Pages des bières/Hibiscus.html"><img src="public\images\hibiscus.jpg" width=20% /></a>
        </div>

        <div class="chocolat">
            <a href="Pages des bières/Chocolat.html"><img src="public\images\chocolat.jpg" width=31.2% /></a>
        </div>

        <div class="vanille">
            <a href="Pages des bières/Vanille.html"><img src="public\images\vanille.jpg" width=73.5% /></a>
        </div>

        <div class="prestige">
            <h1>PRESTIGE</h1>
        </div>

        <div class="safran">
            <a href="Pages des bières/Safran.html"><img src="public\images\safran.jpg" width=30%/></a>
        </div>

        </br>
    </main>



    <div class="pagination">
    <ul>
    <?php
        for ($i = 1; $i <= $nbPages; $i++) {
            echo "<li><a href='boutique.php?page=$i'>$i</a></li>";
        }
    ?>
    </ul>
</div>

<?php foreach ($beers as $num => $abeers): ?>
    <div class="carte">
        <a href="fiche.php?num=<?= $num ?>">
            <?php
            if (isset($aStudent['photo'])) {
                $photo = 'groupe' . $aStudent['group'] . '/small/' . $aStudent['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <figure class="photo"><img src="public/images/<?= $photo ?>" alt="photo de <?= $aStudent['firstname'] ?> <?= $aStudent['lastname'] ?>">
            </figure>
        </a>
    </div>
<?php endforeach ?>