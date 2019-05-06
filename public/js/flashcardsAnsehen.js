$(document).ready(function() {
    let data = {
        'token': 'EkEKyYTgbfqP6XigRWRD'
    };

    let allFlashcards = [];

    $.ajax({
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Accept": "application/json"
        },
        type: 'post',
        url: 'api/flashcards',
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
    })
        .done(function (json) {
            console.log(json);
            insertIntoContainer(json.data);
            for (let item of json.data) {
                allFlashcards.push(item);
            }
        })
        .fail(function (xhr, status, error) {
            console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
        });



    $.ajax({
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Accept": "application/json"
        },
        type: 'post',
        url: 'api/name',
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
    })
        .done(function (json) {
            console.log(json);
        })
        .fail(function (xhr, status, error) {
            console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
        });


    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }

    $('#random-input').on('click', function (e) {
        shuffle(allFlashcards);
        insertIntoContainer(allFlashcards);
    });

    $('#searchbox').on('keyup', function (e) {
        let searchbox = document.querySelector('#searchbox');
        let bufferArray = [];
        for (let item of allFlashcards) {
            if (item.title.toLowerCase().includes(searchbox.value.toLowerCase()) || item.content.toLowerCase().includes(searchbox.value.toLowerCase())) {
                bufferArray.push(item);
            }
        }
        insertIntoContainer(bufferArray);
    });

    function getContent(title, id, content){
        return "  <div class=\"col-md-3 flashcard\">\n" +
            "                        <div class=\"flashcard-text mb-3 text-center\" data-toggle=\"modal\" data-target=\"#fc" + id + "_content\">\n" +
            title +
            "                        </div>\n"  +
            " <div id=\"fc" + id + "_content\" class=\"modal fade bd-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">\n" +
            "                            <div class=\"modal-dialog modal-lg modal-dialog-centered\">\n" +
            "                                <div class=\"modal-content\">\n" +
            "                                    <div class=\"modal-header\">\n" +
            "                                        <h5 class=\"modal-title\" id=\"ModalLongTitle\">Kategorie 1 - " + title + id + "</h5>\n" +
            "                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n" +
            "                                            <span aria-hidden=\"true\">&times;</span>\n" +
            "                                        </button>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"modal-body\">\n" +
            "                                        <p>" + content + "</p>" +
            "                                    </div>\n" +
            "                                </div>\n" +
            "                            </div>\n" +
            "                        </div>" +
            "                    </div>"
    }

    function insertIntoContainer(array){
        let container = document.querySelector('#collapseOne .row');
        container.innerHTML="";
        for (let item of array) {
            container.innerHTML += getContent(item.title, item.id, item.content);
        }
    }
});
