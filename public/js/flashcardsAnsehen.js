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
            let container = document.querySelector('#collapseOne .row');
            console.log(container);
            for (let item of json.data) {
                container.innerHTML += "  <div class=\"col-md-3 flashcard\">\n" +
                    "                        <div class=\"flashcard-text mb-3 text-center\" data-toggle=\"modal\" data-target=\"#fc" + item.id + "_content\">\n" +
                    item.title +
                    "                        </div>\n"  +
                    " <div id=\"fc" + item.id + "_content\" class=\"modal fade bd-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">\n" +
                    "                            <div class=\"modal-dialog modal-lg modal-dialog-centered\">\n" +
                    "                                <div class=\"modal-content\">\n" +
                    "                                    <div class=\"modal-header\">\n" +
                    "                                        <h5 class=\"modal-title\" id=\"ModalLongTitle\">Kategorie 1 - " + item.title + item.id + "</h5>\n" +
                    "                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n" +
                    "                                            <span aria-hidden=\"true\">&times;</span>\n" +
                    "                                        </button>\n" +
                    "                                    </div>\n" +
                    "                                    <div class=\"modal-body\">\n" +
                    "                                        <p>" + item.content + "</p>" +
                    "                                    </div>\n" +
                    "                                </div>\n" +
                    "                            </div>\n" +
                    "                        </div>" +
                    "                    </div>";


                console.log(item.id, item.title, item.content);
            }
        })
        .fail(function (xhr, status, error) {
            console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
        });

    console.log("gesendet");
});
