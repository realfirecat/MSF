"use strict";

$(document).ready(function() {

    $(function () {
            // preventing page from redirecting
            $("html").on("dragover", function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(".upload h3").text("Drag here");
            });

            $("html").on("drop", function (e) {
                e.preventDefault();
                e.stopPropagation();
            });

            // Drag enter
            $('.upload').on('dragenter', function (e) {
                e.stopPropagation();
                e.preventDefault();
                $(".upload h3").text("Drop");
            });

            // Drag over
            $('.upload').on('dragover', function (e) {
                e.stopPropagation();
                e.preventDefault();
                $(".upload h3").text("Drop");
            });

            // Drop
            $('.upload').on('drop', function (e) {
                e.stopPropagation();
                e.preventDefault();

                $(".upload h3").text("Upload");

                let file = e.originalEvent.dataTransfer.files;
                let fd = new FormData();

                fd.append('file', file[0]);

                uploadData(fd, '92f78caf010a8cfbe292cebf873e7f12');
            });

        });

// Sending AJAX request and upload file
        function uploadData(fd, token) {
            console.log(fd);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'api/UploadFile?token='+token,
                data: fd,
                processData: false,
                contentType: false,
            })
                .done(function (msg) {
                    console.log("Successful: " + msg);
                })
                .fail(function (xhr, status, error) {
                    console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
                });

            console.log("gesendet");
        }

    $("#registerButton").on("click", function() {

        let username = $("#registerUsername").val();

        console.log(username);
        register(username);
    });

        function register(username) {
            let data = {
                'username': username
            };
        $.ajax({
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Accept": "application/json"
            },
            type: 'post',
            url: 'api/Register',
            data: JSON.stringify(data),
            processData: false,
            contentType: false,
        })
            .done(function (msg) {
                console.log("Successful: " + msg);
            })
            .fail(function (xhr, status, error) {
                console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
            });

        console.log("gesendet");
    }

  /*  function login(token) {
            let data = { 'loginToken': token };
        $.ajax({
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Accept": "application/json"
            },
            type: 'post',
            url: 'api/Login',
            data: JSON.stringify(data),
            processData: false,
            contentType: false,
        })
            .done(function (msg) {
                console.log("Successful: " + msg);
            })
            .fail(function (xhr, status, error) {
                console.log("Failed: " + xhr + " ___ " + status + " ___ " + error);
            });

        console.log("gesendet");
    }*/


        //login("64124ae6386b78524db65450f3cab2be");

    });
