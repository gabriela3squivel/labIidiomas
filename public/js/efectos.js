$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});

// Scrolling Effect

$(window).on("scroll", function() {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
    } else {
        $('nav').removeClass('black');
    }
})


function openInfo(evt, infoName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("topnav-item");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", " ");
    }
    document.getElementById(infoName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Creado por Vku.
// http://loseasi.blogspot.com/
function cambiarvideo(url) {
    document.getElementById('videogaleria').innerHTML = '<object width="425" height="344"><param name="movie" value="' + url + '?fs=1&amp;hl=es_ES&amp;rel=0&amp;autoplay=1"/><param value="true" name="allowFullScreen"/><param value="always" name="allowscriptaccess"/><param value="transparent" name="wmode"/><embed width="425" height="344" wmode="transparent" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="' + url + '?fs=1&amp;hl=es_ES&amp;rel=0&amp;autoplay=1"/></object>';
    return false;
}