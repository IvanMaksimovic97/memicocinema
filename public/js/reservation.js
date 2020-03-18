function getSeats(id) {
    $.ajax({
        type: "get",
        url: "/getSeats/"+id,
        success: function (response) {
            $("#seats").attr('placeholder', `Available: ${response} seats`);
        }
    });
}

$('body').on('submit', '#reserve', function (e) {
    e.preventDefault();

    let showTime = $("#showTime").val();
    let seats = $("#seats").val();
    let csrf = $("input[name='_token']").val();

    $.ajax({
        type: "post",
        url: "/reserve",
        data: {
            "_token" : csrf,
            "showTime" : showTime,
            "seats" : seats
        },
        success: function (response) {
            $("#submit").parent().after(response);
            getSeats($("#showTime").val());
            $("#seats").val("");
        }
    });
});

$(document).ready(function () {
    getSeats($("#showTime").val());
});

$('body').on('change','#showTime', function (e) {
    getSeats($("#showTime").val());
});
