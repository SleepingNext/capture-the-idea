function runAway() {
  var screenWidth = screen.width;
  var screenHeight = screen.height;

  var newX = Math.floor(Math.random() * (screenWidth - 200)) + 1;
  var newY = Math.floor(Math.random() * (screenHeight - 250)) + 1;

  document.getElementById("game-wrapper").style.transform =
    "translate(" + newX + "px," + newY + "px)";
}

function setDarkMode(boolean) {
  if(boolean) {
      document.body.id = "dark";
      localStorage.setItem('theme', 'dark');
  } else {
      localStorage.setItem('theme', 'light');
      document.body.removeAttribute('id');
  }
}
