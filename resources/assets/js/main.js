$('.remove').click(function () {
    var id = $(this).data("movie");
    $(this).attr('disabled', 'true')
    $.ajax(
        {
            url: "/remove-to-favourite/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token
            },
            success: function () {
                window.location.reload()
            }
        });
    $(this).attr('disabled', 'false')

});

$('.add').click(function () {
    var movie = $(this).data("movie");
    $(this).attr('disabled', 'true')
    $.ajax(
        {
            url: "add-to-favourite/" + movie.id,
            type: 'POST',
            data: {
                "user_id": user_id,
                "movie_id": movie.id,
                "_method": 'POST',
                "_token": token
            },
            success: function () {
                window.location.reload()
            }
        });
    $(this).attr('disabled', 'false')

})