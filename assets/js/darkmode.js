function setDarkMode(boolean) {
    if (boolean) {
        document.body.id = "dark";
        localStorage.setItem('theme', 'dark');
        document.getElementById('welcome-wrapper').style.border = '10px dotted #ffffff';
    } else {
        document.body.removeAttribute('id');
        localStorage.setItem('theme', 'light');
        document.getElementById('welcome-wrapper').style.border = '10px dotted #450b0e';
    }
}