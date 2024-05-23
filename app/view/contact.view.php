
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title> Contact Mayel </title>
</head>



<body>
    <main>
        <div class="debut">
            <h1>MAYEL</h1>
            <h2>Des questions, n'hésitez pas à nous contacter !</h2>
        </div>


        <section class="milieu">
            <div class="infos">
                    <p>
                        Vous souhaitez visiter la brasserie ? Vous souhaitez organiser
                        un événement particulier ? Vous souhaitez effectuer un partenariat
                        avec la brasserie Mayel ? 
                        <br>

                        Décrivrez de manière claire votre projet en complétant le formulaire
                        ci-dessous, ou contactez-nous directement!
                    </p>
                </div>
                <div class="formulaire">
                    <form action="http://divergence.mmibut1.org/app/model/contactmodel.php" method="POST">
                        <label for="name"> Nom :</label>
                        <input type="text" id="name" name="nom_contact" placeholder="Entrez votre nom" required>

                        <label for="name"> Prénom :</label>
                        <input type="text" id="name" name="prenom_contact" placeholder="Entrez votre prénom" required>

                        <label for="email"> Email :</label>
                        <input type="email" id="email" name="email_contact" placeholder="Entrez votre email" required>

                        <label for="message"> Message :</label>
                        <textarea id="message" name="message_contact" placeholder="Entrez votre message" required></textarea>

                        <label for="subscribe">
                            <input type="checkbox" id="subscribe" name="subscribe">
                            Recevoir des notifications par email
                        </label>

                        <button class="gamme" type="submit">Envoyer</button>

                        <p>
                            Les informations recueillies dans le questionnaire sont enregistrées
                            dans un fichier informatisé par l'équipe, dans le cadre de votre
                            demande d’informations sur  <br>

                            Les données demandées sont nécessaires au traitement de votre demande.
                            Les données seront exclusivement communiquées à La Brasserie Mayel.
                            Elles sont conservées pendant une durée de 2 ans. Consultez notre politique
                            de protection des données <br>

                            Vous pouvez accéder aux données vous concernant, les rectifier,
                            demander leur effacement ou exercer votre droit à la limitation du
                            traitement de vos données. Pour exercer ces droits ou pour toute
                            question sur le traitement de vos données dans ce dispositif,
                            vous pouvez écrire à Brasserie Mayel <br>
                        </p>
                    </form>
                </div>
        </section>

        <div class="nous-suivre">
            <div id="RS1">
            <div class="nous"><img src="public/pictures/tel.png" alt="phone">06 64 06 07 84</div>
            <div class="nous"><img src="public/pictures/MAIL.jpg" alt="mail">contact@divergencebrasserie.fr</div>
            </div>
            <div id="RS2">
            <div class="nous"><a href="https://www.facebook.com/profile.php?id=100091975442786" target="_blank"><img src="public/pictures/facebook.png" alt="Facebook"></a></div>
            <div class="nous"><a href="https://www.instagram.com/divergence_brasserie/"  target="_blank"><img src="Instagram.png" alt="Instagram"></a></div>
            <div class="nous"><img src="public/pictures/Tik-Tok.png" alt="Tiktok"></div>
            <div class="nous"><img src="public/pictures/Youtube.png" alt="Youtube"></div>
            </div>
        </div>


        <section class="carte">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.383029543659!2d2.3296967755294933!3d48.86997429989246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e30ef50edeb%3A0xdef0196297f469a2!2s28%20Rue%20de%20la%20Paix%2C%2075002%20Paris!5e0!3m2!1sfr!2sfr!4v1682622599564!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

    </main>
</body>
</html>