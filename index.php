<html>

<head>
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<!-- <link rel="manifest" href="/site.webmanifest"> -->
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title>SleepingNext</title>
	<link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-dark.css" rel="stylesheet">
	<script src="assets/js/game.js"></script>
</head>

<body>
	<div id="welcome-wrapper" class="centered">
		<img id="ithoughts" src="assets/img/ithoughts-2.gif">
		<h1>Please help SleepingNext capturing the idea.</h1>
	</div>
	<div onclick="runAway()" onmouseover="runAway()" id="game-wrapper">
		<img id="idea" src="assets/img/idea.png">
		<p>Capture The Idea!</p>
	</div>
	<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
	<!-- light bulb from: https://www.stockvault.net/photo/174577/light-bulb-ideas -->
	<!-- ithoughts from: https://dribbble.com/shots/3681584-/attachments/3681584-?mode=media -->
  <div id="mode-wrapper">
    <button onclick="setDarkMode(true)" id="darkButton">Dark Mode</button>
    <button onclick="setDarkMode(false)" id="lightButton">Light Mode</button>
  </div>
</body>

<script>
  if(localStorage.getItem('theme') === 'dark') {
    document.body.id = "dark";
  } else {
    document.body.removeAttribute('id');
  }
</script>
</html>