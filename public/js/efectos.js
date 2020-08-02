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

function camposMaestro() {
    document.getElementById('camposAlumno').style.display = "none";
    document.getElementById('camposMaestro').style.display = "block";

}

function camposAlumno() {
    document.getElementById('camposMaestro').style.display = "none";
    document.getElementById('camposAlumno').style.display = "block";

}

function editarCampos() {
    var btn = document.getElementById('maestro');
    if (btn.checked) {
        //Profesor
        document.getElementById('telefono'), required = "true";
        document.getElementById('anios'), required = "true";
        document.getElementById('nivelImparte'), required = "true";
        document.getElementById('idioma'), required = "true";
        document.getElementById('nivelEstudios'), required = "true";
        //Estudiante
        document.getElementById('curp'), required = "false";
        document.getElementById('nivel'), required = "false";
        document.getElementById('grado'), required = "false";
        document.getElementById('grupo'), required = "false";

        camposMaestro()
    } else {
        //Profesor
        document.getElementById('telefono'), required = "false";
        document.getElementById('anios'), required = "false";
        document.getElementById('nivelImparte'), required = "falsee";
        document.getElementById('idioma'), required = "false";
        document.getElementById('nivelEstudios'), required = "false";
        //Estudiante
        camposAlumno();
        document.getElementById('curp'), required = "true";
        document.getElementById('nivel'), required = "true";
        document.getElementById('grado'), required = "true";
        document.getElementById('grupo'), required = "true";


    }
}

function esMaestro() {
    document.getElementById("ActReciente").style.display = "none";
    document.getElementById("formVistaProfesional").style.display = "block";


    document.getElementById('telefono'), required = "true";
    document.getElementById('anios'), required = "true";
    document.getElementById('nivelImparte'), required = "true";
    document.getElementById('idioma'), required = "true";
    document.getElementById('nivelEstudios'), required = "true";
    //Estudiante/** 
    //document.getElementById('curp'), required = "false";
    //document.getElementById('nivel'), required = "false";
    //document.getElementById('grado'), required = "false";
    //document.getElementById('grupo'), required = "false";
}

function esEstudiante() {
    document.getElementById("ActReciente").style.display = "none";
    document.getElementById("formVistaAcademica").style.display = "block";


}

function editProfileInfo() {
    document.getElementById('info-personal').style.display = "none";
    document.getElementById("formProfile").style.display = "block";

}

function cancelarEditProfile() {
    document.getElementById("formProfile").style.display = "none";
    document.getElementById("info-personal").style.display = "block";
}

function cancelarActProfesional() {
    document.getElementById("formVistaProfesional").style.display = "none";
    document.getElementById("ActReciente").style.display = "block";


    document.getElementById('telefono'), required = "false";
    document.getElementById('anios'), required = "false";
    document.getElementById('nivelImparte'), required = "false";
    document.getElementById('idioma'), required = "false";
    document.getElementById('nivelEstudios'), required = "false";


}

function tipoCarga() {
    var btn = document.getElementById('enlace');
    if (btn.checked) {
        document.getElementById('inputEnlace'), required = "true";
        document.getElementById('customFile'), required = "false";

        document.getElementById('cargarEnlace').style.display = "block";
        document.getElementById('cargarArchivo').style.display = "none";
    } else {
        document.getElementById('inputEnlace'), required = "false";
        document.getElementById('customFile'), required = "true";

        document.getElementById('cargarEnlace').style.display = "none";
        document.getElementById('cargarArchivo').style.display = "block";

    }
}