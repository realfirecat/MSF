let keytoken = 'loginToken';

if(sessionStorage.getItem(keytoken) === null) {
    window.location.href = "/MSF/public";
}

$(document).ready(function() {

    $('#logoutbutton').click(function() {
        sessionStorage.removeItem(keytoken);
        window.location.href = "/MSF/public";
    });

    let data = {
        'token': sessionStorage.getItem(keytoken)
    };

    let allFlashcards = [];
    let allFlashcardsSearched = [];

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
            insertIntoContainer(json.data);
            for (let item of json.data) {
                allFlashcards.push(item);
                allFlashcardsSearched.push(item);
            }
        })
        .fail(function (xhr, status, error) {
            swal('Error!','','error');
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
            document.querySelector('#username').innerHTML=JSON.parse(json).username;
        })
        .fail(function (xhr, status, error) {
            swal('Error!','','error');
        });



    $('#random-input').on('click', function (e) {
        console.log(allFlashcardsSearched);
        shuffle(allFlashcardsSearched);
        insertIntoContainer(allFlashcardsSearched);
    });

    $('#searchbox').on('keyup', function (e) {
        let searchbox = document.querySelector('#searchbox');
        let bufferArray = [];
        for (let item of allFlashcards) {
            if (item.title.toLowerCase().includes(searchbox.value.toLowerCase()) || item.content.toLowerCase().includes(searchbox.value.toLowerCase())) {
                bufferArray.push(item);
            }
        }
        allFlashcardsSearched = bufferArray;
        insertIntoContainer(bufferArray);
    });

    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }


    function getContent(title, id, content, isFavorite){
        return "  <div class=\"col-md-3 flashcard\">\n" +
            "                        <div class=\"flashcard-text mb-3 text-center\" data-toggle=\"modal\" data-target=\"#fc" + id + "_content\">\n" +
            title +
            "                        </div>\n"  +
            " <div id=\"fc" + id + "_content\" class=\"modal fade bd-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">\n" +
            "                            <div class=\"modal-dialog modal-lg modal-dialog-centered\">\n" +
            "                                <div class=\"modal-content\">\n" +
            "                                    <div class=\"modal-header\">\n" +
            "                                        <h5 class=\"modal-title\" id=\"ModalLongTitle\">Kategorie 1 - " + title +  " <i class=\"favoriteIcon favorite"+isFavorite+"\" id='"+id+"'></i></h5>\n" +
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

    function getCategoryContent(catTitle, modals, categoryId) {
        return "<div class=\"card\">\n" +
            "        <div class=\"kategorie card-header\" id=\"headingOne\">\n" +
            "            <h5 class=\"mb-0\">\n" +
            "                <button class=\"btn btn-link\" id=\"kat"+categoryId+"\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse"+categoryId+"\" aria-expanded=\"true\" aria-controls=\"collapse"+categoryId+"\">\n" +
            catTitle +
            "                </button>\n" +
            "            </h5>\n" +
            "        </div>\n" +
            "        <div id=\"collapse"+categoryId+"\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">\n" +
            "            <div class=\"row p-5\">\n" +
            modals +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>";
    }

    function insertIntoContainer(array){
        let categories = getCategories(array);
        let container = document.querySelector('#accordion');
        container.innerHTML="";
        array.sort(function (a,b) {
            if (a.isFavorite) {
                return -1;
            }
            return 1;
        });

        let categoryId=1;
        for (let item of categories) {
            let contentModlas = "";
            let content = "";
            for (let item2 of array) {
                if (item2.description===item) contentModlas+=getContent(item2.title, item2.id, item2.content, item2.isFavorite);
            }
            content = getCategoryContent(item, contentModlas, categoryId++);
            container.innerHTML += content;
        }
        addIconEventListener();
    }

    function getCategories(array){
        let cat = [];
        for (let item of array) {
            if (!cat.includes(item.description)) cat.push(item.description)
        }
        return cat;
    }

    function addIconEventListener() {
        let icons = document.querySelectorAll('.favoriteIcon');

        let iconsNotFavorite = document.querySelectorAll('.favorite0');
        for (let item of iconsNotFavorite) {
            item.classList.add('far','fa-heart');
        }

        let iconsWithFavorite = document.querySelectorAll('.favorite1');
        for (let item of iconsWithFavorite) {
            item.classList.add('fas', 'fa-heart');
        }

        for (let i = 0; i < icons.length; i++) {
            icons[i].addEventListener('click', function () {

                let data = {
                    'token': sessionStorage.getItem(keytoken),
                    'flashcardId': icons[i].id
                };

                $.ajax({
                    headers: {
                        "Content-Type": "application/json",
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Accept": "application/json"
                    },
                    type: 'post',
                    url: 'api/toggleFavoriteFlashcardStatus',
                    data: JSON.stringify(data),
                    processData: false,
                    contentType: false,
                })
                    .done(function (json) {
                        json = JSON.parse(json);
                        icons[i].classList.remove('fas','far','fa-heart');
                        if (json.newStatus) {
                            icons[i].classList.add('fas', 'fa-heart');
                        } else {
                            icons[i].classList.add('far', 'fa-heart');
                        }
                        allFlashcards[i].isFavorite=json.newStatus;
                        /*
                        Karte schließen
                        insertIntoContainer(allFlashcards);
                        */


                    })
                    .fail(function (xhr, status, error) {
                        swal('Error!','','error');
                    });
            })
        }
    }

});




