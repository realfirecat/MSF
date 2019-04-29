"use strict";

$(document).ready(function() {
    console.log("yes");

    $("#loginbutton").on("click", function() {

        let token = $("#token").val();

        einloggen(token);

        fetch('')
            .then(function (response) {
                console.log(JSON.stringify(response.json()));
                localStorage.setItem("logintoken", token);
            })
            .catch(function(error) {
                console.error(error);
            })
    });

    function einloggen(data) {
        $.ajax({
            type: 'post',
            url: 'index.php',
            data: {'token': data},
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false
        })
            .done(function (msg) {
                console.log("Successful: " + msg);
            })
            .fail(function (xhr, status, error) {
                console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
            });
    }

});
