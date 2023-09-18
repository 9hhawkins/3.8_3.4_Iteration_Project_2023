const burger = document.getElementById("nav-icon");
const nav = document.getElementById("nav");
const buttonPressed = (e) => {
	burger.classList.toggle("open");
	if (nav.style.width == "0vw") {
    	nav.style.width = "20vw";
		}
	else {
    	nav.style.width = "0vw";
  	}
	
}
nav.style.width = "0vw";
burger.addEventListener('click', buttonPressed);
