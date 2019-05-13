"use strict";

$(document).ready(function() {

    let keytoken = 'loginToken';


    $("#loginbutton").on("click", function() {

        let token = $("#token").val();


        einloggen(token);

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
                if (msg.valid) {
                    sessionStorage.setItem(keytoken, token);
                    window.location.href = "/MSF/public/Dashboard";
                }
                })
            .fail(function (xhr, status, error) {
                swal('Error!','','error');
            });
    }

});
