function runAway() {
    var screenWidth = screen.width;
    var screenHeight = screen.height;

    var newX = Math.floor(Math.random() * (screenWidth - 200)) + 1;
    var newY = Math.floor(Math.random() * (screenHeight - 250)) + 1;

    document.getElementById("game-wrapper").style.transform =
        "translate(" + newX + "px," + newY + "px)";
}