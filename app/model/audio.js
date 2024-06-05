function play(idPlayer, control) {
    console.log("yes")
    let player = document.querySelector('#' + idPlayer);
    if (player.paused) {
    player.play();
    control.textContent = 'Pause';
    } else {
    player.pause();
    control.textContent = 'Play';
    }
    }
    function resume(idPlayer) {
    let player = document.querySelector('#' + idPlayer);
    player.currentTime = 0;
    player.pause();
    }
    