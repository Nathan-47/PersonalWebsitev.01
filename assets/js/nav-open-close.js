//This function opens the navbar 
function w3_open() {
//When the navbar is opened the nav will fill out the whole screen and the colour of the nav will be black as the nav-links headers will be white.
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

//This function is to close the navbar
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
} 