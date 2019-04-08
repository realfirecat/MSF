"use strict";

$(document).ready(function() {

    $(function() {
        ajaxCall();
    });

    function ajaxCall(){
        $.ajax({
            type: 'post',
            url: 'index.php',
            data: {},
            dataType: 'text',
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

        console.log("gesendet");
    }


});