var available = document.querySelector(".available");
var kid = document.querySelector(".kid");
var kid1 = document.querySelector(".kid1");
var kid2 = document.querySelector(".kid2");
var kid3 = document.querySelector(".kid3");
var selling = document.querySelector(".selling");
var argent = document.querySelector(".argent");
var rental = document.querySelector(".rental");

function active() {
    kid.classList.remove("blind");
    available.classList.add("activ");

    selling.classList.remove("activ");
    argent.classList.remove("activ");
    rental.classList.remove("activ");
    kid1.classList.remove("vis");
    kid2.classList.remove("vis");
    kid3.classList.remove("vis");
}

function sell() {
    kid1.classList.add("vis");
    selling.classList.add("activ");

    available.classList.remove("activ");
    argent.classList.remove("activ");
    rental.classList.remove("activ");
    kid.classList.add("blind");
    kid2.classList.remove("vis");
    kid3.classList.remove("vis");
}

function agent() {
    kid2.classList.add("vis");
    argent.classList.add("activ");

    available.classList.remove("activ");
    selling.classList.remove("activ");
    rental.classList.remove("activ");
    kid.classList.add("blind");
    kid1.classList.remove("vis");
    kid3.classList.remove("vis");
}
function rent() {
    kid3.classList.add("vis");
    rental.classList.add("activ");

    available.classList.remove("activ");
    selling.classList.remove("activ");
    argent.classList.remove("activ");
    kid.classList.add("blind");
    kid2.classList.remove("vis");
    kid1.classList.remove("vis");
}


