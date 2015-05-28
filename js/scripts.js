//-- RESPONSIVE MENU
$(function() {
    var pull    = $('a#pull');
    menu        = $('nav ul');
    menuHeight  = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});
$(window).resize(function(){
    var w = $(window).width();
    if(w > 338 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});

// -- CONTACTFORM => DATEPICKER
$(function() {
    $("#publishFrom").datepicker({
        dateFormat: "dd-mm-yy",
        monthNames: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
        dayNames: ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"],
        dayNamesMin: ["zo", "ma", "di", "wo", "do", "vr", "za"],
        firstDay: 1,
        minDate: 0,
        onSelect: function(selected) {
            var date2 = $('#publishFrom').datepicker('getDate');
            date2.setDate(date2.getDate()+1);
            $("#publishTo").datepicker("option","minDate", date2);
        }
    });
    $("#publishTo").datepicker({
        dateFormat: "dd-mm-yy",
        monthNames: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
        dayNames: ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"],
        dayNamesMin: ["zo", "ma", "di", "wo", "do", "vr", "za"],
        firstDay: 1,
        minDate: 0,
        onSelect: function(selected) {
            var date2 = $('#publishTo').datepicker('getDate');
            date2.setDate(date2.getDate()-1);
            $("#publishFrom").datepicker("option","maxDate", date2);
        }
    });
});

// -- FORM VALIDATION
var nederlands = {
    errorTitle : 'Het formulier werd niet goed ingevuld!',
    requiredFields : 'Niet alle verplichte velden werden ingevuld',
    badTime : 'U voerde een foutieve tijdsnotatie in',
    badEmail : 'U voerde een foutief e-mailadres in',
    badTelephone : 'U voerde een foutief telefoonnummer in',
    badSecurityAnswer : 'Het antwoord op de beveiligingsvraag is niet correct',
    badDate : 'U voerde een foutieve datum in',
    lengthBadStart : 'Het antwoord moet liggen tussen ',
    lengthBadEnd : ' tekens',
    lengthTooLongStart : 'De invoer bedraagt meer dan ',
    lengthTooShortStart : 'De invoer bedraagt minder dan ',
    notConfirmed : 'De waarden kunnen niet worden bevestigd',
    badDomain : 'U voerde een foutieve domeinnaam in',
    badUrl : 'U voerde een foutieve URL in',
    badCustomVal : 'U voerde een foutief antwoord in',
    badInt : 'U voerde een foutief nummer in',
    badSecurityNumber : 'Uw rijksregisternummer werd niet correct ingevuld',
    badUKVatAnswer : 'Het BTW-nummer is niet geldig',
    badStrength : 'Uw wachtwoord is niet veilig genoeg',
    badNumberOfSelectedOptionsStart : 'U moet tenminste ',
    badNumberOfSelectedOptionsEnd : ' antwoorden',
    badAlphaNumeric : 'Het antwoord mag enkel alfanumeriekte tekens bevatten ',
    badAlphaNumericExtra: ' en ',
    wrongFileSize : 'De bestandsgrootte overschrijdt de limiet',
    wrongFileType : 'Dit bestandstype is niet toegelaten',
    groupCheckedRangeStart : 'Gelieve te kiezen tussen ',
    groupCheckedTooFewStart : 'Kies minimaal ',
    groupCheckedTooManyStart : 'Kies maximaal ',
    groupCheckedEnd : ' item(s)'
};

function emptyAllInputFields(form) {
    $(form).trigger('reset');
    $(form).each(function () {
        $('textarea').val('');
    })
}

function resetAlerts() {
    $('.alert').hide();
}