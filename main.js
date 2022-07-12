
ScrollHeight();



function actualiserthemeParLesCookies() {
    veleurtheme = getCookie('mode');

    if (veleurtheme == "detail") {
        cheked();
        document.getElementById("checkboxmode").checked = true;


    } if (veleurtheme == "simple") {
        decheked();
        document.getElementById("checkboxmode").checked = false;

    }
    veleurscrolling = getCookie('scrolling');

    if (veleurscrolling == "yes") {

        document.documentElement.style.overflow = 'overflow';

        var controlleur = document.querySelectorAll(".controlleur");

        controlleur.forEach((elem) => elem.classList.toggle("active"));

    } else {
        document.documentElement.style.overflow = 'hidden';


    }


    veleurscrolling = getCookie('taille');

    if (veleurscrolling == "bas") {

        var controlleur2 = document.querySelectorAll(".controlleur2");

        controlleur2.forEach((elem) => elem.classList.toggle("active"));


    } else {



    }



}



function detectsurp1(id) {



    var parcheminvierge = document.querySelectorAll("#" + id);

    parcheminvierge.forEach((elem) => elem.classList.toggle("active"));


}



function cheked() {

    var image = document.querySelectorAll(".labarum1");
    var detail = document.querySelectorAll(".detail");
    var parchemin8 = document.querySelectorAll("#parchemin8");

    detail.forEach((elem) => elem.classList.toggle("active"));
    image.forEach((elem) => elem.classList.toggle("active"));
    parchemin8.forEach((elem) => elem.classList.remove("disparu"));

}


function decheked() {

    var image = document.querySelectorAll(".labarum1");
    var detail = document.querySelectorAll(".detail");
    var image2 = document.querySelectorAll(".image");
    var map = document.querySelectorAll(".map");
    var textdanscart = document.querySelectorAll(".textdanscart");
    var image3 = document.querySelectorAll(".image2");

    var parchemin8 = document.querySelectorAll("#parchemin8");

    parchemin8.forEach((elem) => elem.classList.toggle("disparu"));

    image3.forEach((elem) => elem.classList.remove("active"));
    textdanscart.forEach((elem) => elem.classList.remove("active"));
    map.forEach((elem) => elem.classList.remove("active"));
    image2.forEach((elem) => elem.classList.remove("active"));
    detail.forEach((elem) => elem.classList.remove("active"));
    image.forEach((elem) => elem.classList.remove("active"));
}

function ScrollHeight() {
    var content = document.querySelector('#parchment');


    actualiserthemeParLesCookies();
    content.style.height = '100%';


    $("#popUp").css("margin-left", "-425px");

}


function creerCookie(nom, valeur, jour) {
    // Si les jours ont bien été définis
    if (jour) {
        // On crée un objet date stockant la date actuelle
        var date = new Date();
        // On définit la date d'expiration du cookie
        date.setTime(date.getTime() + (jour * 24 * 60 * 60 * 1000));
        // On met la date au bon format pour un cookie
        var exp = '; expires = ' + date.toGMTString();
    }
    // Si les jours n'ont pas été définis,pas besoin de calcul
    else {
        var exp = '';
    }
    document.cookie = nom + '=' + valeur + exp + ';SameSite = None; Secure';

    console.log("le cooki" + valeur + "a etais cree")


}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

function boutoncookie() {

    creerCookie('scrolling', 'yes', 0);


    setTimeout(500);

    var controlleur = document.querySelectorAll(".controlleur");

    controlleur.forEach((elem) => elem.classList.toggle("active"));
    document.location.reload(true);

};


function boutontaille() {

    creerCookie('taille', 'bas', 0);
    var controlleur2 = document.querySelectorAll(".controlleur2");

    controlleur2.forEach((elem) => elem.classList.toggle("active"));


};




var checkboxmode = document.getElementById("checkboxmode");
checkboxmode.addEventListener('change', function () {
    if (checkboxmode.checked) {
        cheked();
        creerCookie('mode', 'detail', 0);

    } else {

        decheked();
        creerCookie('mode', 'simple', 0);
    }
});




var moveForce = 30; // max popup movement in pixels
var rotateForce = 20; // max popup rotation in deg

$(document).mousemove(function (e) {
    var docX = $(document).width();
    var docY = $(document).height();

    var moveX = (e.pageX - docX / 2) / (docX / 2) * -moveForce;
    var moveY = (e.pageY - docY / 10) / (docY / 10) * -moveForce;

    var rotateY = (e.pageX / docX * rotateForce * 2) - rotateForce;
    var rotateX = -((e.pageY / docY * rotateForce * 10) - rotateForce);

    $('.popup')
        .css('left', moveX + 'px')
        .css('top', moveY + 'px')
        .css('transform', 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
});



var moveForce = 30; // max popup movement in pixels
var rotateForce = 20; // max popup rotation in deg





$(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll >= 150) {
        $("#popUp").css("margin-left", "-425px");
        $("#plus").css("margin-left", "0px");
    }
});

$("#plus").click(function () {
    $("#popUp").css("margin-left", "0px");
    $("#plus").css("margin-left", "-425px");
});

$("#close").click(function () {
    $("#popUp").css("margin-left", "-425px");
    $("#plus").css("margin-left", "0px");
});






