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

                uploadData(fd);
            });


        });

// Sending AJAX request and upload file
        function uploadData(fd) {
            console.log(fd);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'UploadFile',
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
    });