/**
 * Created by aparzi on 17/10/17.
 */
$(window).ready(function () {
    languageItalian();
    $('.lang_it').on('click', languageItalian);
    $('.lang_eng').on('click', languageEnglish);
});

/***  Color theme random START ***/
var number = Math.floor((Math.random() * 5) + 1);
switch (number) {
    case 1:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/orange.css">');
        break;
    case 2:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/green.css">');
        break;
    case 3:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/lime.css">');
        break;
    case 4:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/purple.css">');
        break;
    case 5:
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/color/red.css">');
        break;
}

/*** Get value query string ***/
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (results == null) {
        return false
    }
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

/*** Switch language ***/
function languageItalian() {
    switchFlagLanguage('lang_eng');
    $("script[src='resource/lang_eng.js']").remove();
    $('<script src="resource/lang_it.js"></' + 'script>').appendTo(document.body);
    setItalian()
}

function languageEnglish() {
    switchFlagLanguage('lang_it');
    $("script[src='resource/lang_it.js']").remove();
    $('<script src="resource/lang_eng.js"></' + 'script>').appendTo(document.body);
    setEnglish()
}

function switchFlagLanguage(id_language) {
    if (id_language == 'lang_it') {
        $('li[name=nm_it]').css('display', 'block');
        $('li[name=nm_eng]').css('display', 'none');
    } else {
        $('li[name=nm_eng]').css('display', 'block');
        $('li[name=nm_it]').css('display', 'none');
    }
}

function setEnglish() {
    $("a[href='#about']").html(ABOUT)
    $("a[href='#works']").html(WORKS)
    $("a[href='#education']").html(EDUCATION)
    $("a[href='#contact-form']").html(CONTACT_ME)

    $("#introduction").html(INTRODUCTION)

    $("#title_equipment b").html(MY_EQUIPMENT)
    $("#descr_jetbrains").html(JETBRAINS)
    $("#descr_git").html(GIT)
    $("#descr_linux").html(LINUX)

    $("#title_work_experience").html(WORK_EXPERIENCE)
    $("#title_contact").html('<i class="fa fa-send"></i>'+CONTACT)
    $("#programming_language").html(PROGRAMMING_LANGUAGE)

    $("#title_xeos").html(TITLE_XEOS)
    $("#title_app_unimol").html(TITLE_APP_UNIMOL)
    $("#title_datasounds").html(TITLE_DATASOUNDS)
    $("#title_grs_2017").html(TITLE_GRS_2017)
    $("#title_saner_2018").html(TITLE_SANER_2018)

    $("#description_xeos").html(DESCRIPTION_XEOS)
    $("#description_app_unimol").html(DESCRIPTION_APP_UNIMOL)
    $("#description_grs_2017").html(DESCRIPTION_GRS)
    $("#description_datasounds").html(DESCRIPTION_DATASOUNDS)
    $("#description_saner_2018").html(DESCRIPTION_SANER_2018)
    $(".non_terminato").html(NON_TERMINATO)

    $("#title_education").html('<i class="fa fa-graduation-cap"></i>'+EDUCATION)
    $("#title_diploma").html(TITLE_DIPLOMA)
    $("#description_diploma").html(DESCRIPTION_DIPLOMA)
    $("#title_certificate").html(TITLE_CERTIFICATE)
    $("#description_certificate").html(DESCRIPTION_CERTIFICATE)
    $("#title_university").html(TITLE_UNIVERSITY)
    $("#description_university").html(DESCRIPTION_UNIVERSITY)

}

function setItalian() {
    $("a[href='#about']").html(ABOUT)
    $("a[href='#works']").html(WORKS)
    $("a[href='#education']").html(EDUCATION)
    $("a[href='#contact-form']").html(CONTACT_ME)

    $("#introduction").html(INTRODUCTION)

    $("#title_equipment b").html(MY_EQUIPMENT)
    $("#descr_jetbrains").html(JETBRAINS)
    $("#descr_git").html(GIT)
    $("#descr_linux").html(LINUX)

    $("#title_work_experience").html(WORK_EXPERIENCE)
    $("#title_contact").html(CONTACT)
    $("#programming_language").html(PROGRAMMING_LANGUAGE)

    $("#title_app_unimol").html(TITLE_APP_UNIMOL)
    $("#title_xeos").html(TITLE_XEOS)
    $("#title_datasounds").html(TITLE_DATASOUNDS)
    $("#title_grs_2017").html(TITLE_GRS_2017)
    $("#title_saner_2018").html(TITLE_SANER_2018)

    $("#description_xeos").html(DESCRIPTION_XEOS)
    $("#description_app_unimol").html(DESCRIPTION_APP_UNIMOL)
    $("#description_grs_2017").html(DESCRIPTION_GRS)
    $("#description_datasounds").html(DESCRIPTION_DATASOUNDS)
    $("#description_saner_2018").html(DESCRIPTION_SANER_2018)
    $(".non_terminato").html(NON_TERMINATO)

    $("#title_education").html('<i class="fa fa-graduation-cap"></i>'+EDUCATION)
    $("#title_diploma").html(TITLE_DIPLOMA)
    $("#description_diploma").html(DESCRIPTION_DIPLOMA)
    $("#title_certificate").html(TITLE_CERTIFICATE)
    $("#description_certificate").html(DESCRIPTION_CERTIFICATE)
    $("#title_university").html(TITLE_UNIVERSITY)
    $("#description_university").html(DESCRIPTION_UNIVERSITY)
}

