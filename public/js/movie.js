function getMovies(url) {
    let title = $('#title').val();
    let genre = $('#genre').val();
    let releaseYear = $('#release-year').val();
    let sort = $('#sortBy').val();

    $.ajax({
        type: "get",
        url: url,
        data: {
            "title" : title,
            "genre" : genre,
            "releaseYear" : releaseYear,
            "sort" : sort
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
    getMovies(url);
});

$('body').on('change','#movieSearch', function (e) {
    var url = '/';
    getMovies(url);
});
