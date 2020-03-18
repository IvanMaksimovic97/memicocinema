function getLogs(url) {
    let actionType = $('#actionType').val();
    let table = $('#table').val();

    $.ajax({
        type: "get",
        url: url,
        data: {
            "actionType" : actionType,
            "table" : table
        },
        success: function (response) {
            $('#content').html(response);
        },
        error: function () {
            alert('Logs could not be loaded.');
        }
    });
}

$('body').on('click', '.paginator a', function(e) {
    e.preventDefault();

    var url = $(this).attr('href');
    getLogs(url);
});

$('body').on('change','#logFilter', function (e) {
    var url = '/admin/logs';
    getLogs(url);
});
