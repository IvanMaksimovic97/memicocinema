function table(){
    let tableName = $("#tableSelect").val();
    tableName = tableName.replace(/\s+/g, '');

    $.ajax({
        type: "get",
        url: window.location.href+"/"+tableName,
        success: function (response) {
            $("#content").html(response);
        }
    });
}

$(document).ready(function () {
    table();
});

$("#tableSelect").change(function () {
    table();
});
