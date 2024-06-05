<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/contact.css" />
    <link rel="stylesheet" href="https://use.typekit.net/wuv4mxx.css">
    <script src="/B2_MAYEL/app/model/audio.js" defer> </script>
</head>

<body>



</html>
<main>
    <div class="debut">
        <h1>Mayel</h1>
        <h2>Laissez vous enivrer par l'expérience musicale...</h2>
    </div>

    <audio id="audioPlayer" src="/B2_MAYEL/public/audio/Interstellar Main Theme - Extra Extended - Soundtrack by  Hans Zimmer.mp3"></audio>
    <div class="audio">
    <button class="control" onclick="play('audioPlayer', this)">Play</button>
    <button class="control" onclick="resume('audioPlayer')">Stop</button>
    </div>

   
    <div class="infos">
        <p>
        Vous souhaitez prolonger l'expérience Mayel ? Veuillez remplir le formulaire ci dessous.
        </p> 

        <section class="milieu">

            <div class="formulaire">
                <form action="register_contact.php" method="POST">
                    <label for="nom"> Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

                    <label for="prenom"> Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>

                    <label for="email"> Email :</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

                    <label for="message"> Message :</label>
                    <textarea id="message" name="message" placeholder="Entrez votre message" required></textarea>

                    <button class="gamme" type="submit">Envoyer</button>


                </form>
            </div>
        </section>
    </div>

    <section class="carte">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20998.44487763863!2d2.3567385!3d48.8619171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e04b0d02865%3A0x9b569100157a57e8!2s3%20Rue%20Michel%20le%20Comte%2C%2075003%20Paris!5e0!3m2!1sfr!2sfr!4v1717580179095!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>

    </main>
</body>