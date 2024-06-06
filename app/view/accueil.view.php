
<body>
    <div class="container">
        <div class="publicite"> </div>
        <div class="content">
            <p>Mayel présente</p>
            <div class="video-container">
                <iframe id="videoFrame" src="https://www.youtube.com/embed/kKVDfFuW12g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php
                $messages = [
                    "Nous sommes honorés de vous accueillir !",
                    "Votre présence ici est des plus agréables !",
                    "Nous vous souhaitons la bienvenue dans ce lieu d'exception !",
                    "Nous vous recevons avec un plaisir infini !"
                ];
                $random_index = array_rand($messages);
                $welcome_message = $messages[$random_index];
            ?>
            <p><?php echo $welcome_message; ?></p>
        </div>
    </div>
    <script>
        document.getElementById('videoFrame').addEventListener('mouseenter', function() {
            this.style.border = '2px solid white';
            this.style.transition = 'border-color 0.5s';
        });

        document.getElementById('videoFrame').addEventListener('mouseleave', function() {
            this.style.border = 'none';
            this.style.transition = 'border-color 0.5s';
        });

        document.getElementById('videoFrame').addEventListener('click', function() {
            alert('Bienvenue dans notre vidéo de présentation !');
        });
    </script>
</body>
</html>