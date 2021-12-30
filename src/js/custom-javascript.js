// Add your JS customizations here

//This page actually works for Javascript. 

let openNavMenu = false;

const navMenuBtn = document.getElementById("navIcon");
navMenuBtn.onclick = ()=>{
    if(openNavMenu === false){
        openNavMenu = true;
        document.getElementById("navMenu").classList.remove("hidden");
    } else {
        openNavMenu = false;    
        document.getElementById("navMenu").classList.add("hidden");
    }
    
}