function play(idPlayer, control) {
    // Affiche un message "yes" dans la console pour indiquer que la fonction a été appelée
    console.log("yes");
    
    // Sélectionne l'élément vidéo ou audio avec l'ID spécifié
    let player = document.querySelector('#' + idPlayer);
    
    // Vérifie si le lecteur est en pause
    if (player.paused) {
        // Si le lecteur est en pause, lance la lecture
        player.play();
        // Change le texte du bouton de contrôle en 'Pause'
        control.textContent = 'Pause';
    } else {
        // Si le lecteur est en cours de lecture, met en pause
        player.pause();
        // Change le texte du bouton de contrôle en 'Play'
        control.textContent = 'Play';
    }
}

function resume(idPlayer) {
    // Sélectionne l'élément vidéo ou audio avec l'ID spécifié
    let player = document.querySelector('#' + idPlayer);
    
    // Remet le lecteur à zéro (début de la vidéo ou de l'audio)
    player.currentTime = 0;
    
    // Met le lecteur en pause
    player.pause();
}
