// Add your JS customizations here

//This page actually works for Javascript.

let openNavMenu = false;

//For some reason if I click on the nav too fast it breaks. I need to figure out how to fix this. 

const navMenuBtn = document.getElementById("navIcon");
navMenuBtn.onclick = () => {
	if (openNavMenu === false) {
		openNavMenu = !openNavMenu;
		document.getElementById("navMenu").classList.remove("hidden");
		document.body.classList.add("removeScrollbar");
		console.log("Clicked")
	} else {
		openNavMenu = !openNavMenu;
		document.getElementById("navMenu").classList.add("hidden");
		document.body.classList.remove("removeScrollbar");
		//Lol change idiot.
		console.log("clicked on")
	}
};
