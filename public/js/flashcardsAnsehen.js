$(document).ready(function() {

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'get',
        url: 'api/flashcards',
        data: {},
        processData: false,
        contentType: false,
    })
        .done(function (json) {
            for (let item of json.data) {
                console.log(item.id, item.title, item.content);
            }
        })
        .fail(function (xhr, status, error) {
            console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
        });

    console.log("gesendet");

});
