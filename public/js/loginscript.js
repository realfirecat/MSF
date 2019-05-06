"use strict";

$(document).ready(function() {
    console.log("yes");

    $("#loginbutton").on("click", function() {

        let token = $("#token").val();

        console.log(token);

        einloggen(token);

        /*fetch('api/Login')
            .then(function (response) {
                console.log(JSON.stringify(response.json()));
                localStorage.setItem("logintoken", token);
            })
            .catch(function(error) {
                console.error(error);
            })*/
    });

    function einloggen(token) {
        let data = {
            'loginToken': token
        };
        $.ajax({
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Accept": "application/json"
            },
            type: 'post',
            url: 'api/Login',
            data: JSON.stringify(data),
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false
        })
            .done(function (msg) {
                console.log("Successful: " + msg.valid);
                if (msg.valid) window.location.href = "/MSF/public/Dashboard";
            })
            .fail(function (xhr, status, error) {
                console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
            });
    }

});
