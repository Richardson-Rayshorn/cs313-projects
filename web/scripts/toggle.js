//Get the hamburger to make it clickable
document.getElementById("hamburger").addEventListener("click", visibleNav);

function visibleNav(){
    //get the navbar and toggle it
    document.getElementById("navbar").classList.add("visible-nav");
}

document.getElementById("close-menu").addEventListener("click", invisibleNav);

function invisibleNav(){
    //get the navbar and toggle it
    var nav = document.getElementById("navbar");
    nav.classList.remove("visible-nav");
}