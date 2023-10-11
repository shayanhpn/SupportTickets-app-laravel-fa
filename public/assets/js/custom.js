$(document).ready(() => {
    $(".alert").fadeOut(2000);
});

$(document).ready(() => {
    $("#response-header").click(() => {
        $("#response-body").slideToggle("slow");
    });
});

$(document).ready(() => {
    $("#response-button").click(() => {
        $("#response-body").slideToggle("slow");
    });
});

$('#reload-captcha').click(function() {

    $.get('/reload-captcha', function(data) {
        $('#captcha-image').attr('src', data);
    });

});
