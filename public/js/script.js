"use strict";

$(document).ready(function() {

    $(function() {
        // preventing page from redirecting
        $("html").on("dragover", function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(".upload-section p").text("Drag here");
        });

        $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

        // Drag enter
        $('.upload-section').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(".upload-section p").text("Drop");
        });

        // Drag over
        $('.upload-section').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(".upload-section p").text("Drop");
        });

        // Drop
        $('.upload-section').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $(".upload-section p").text("Upload");

            let file = e.originalEvent.dataTransfer.files;
            let fd = new FormData();

            fd.append('file', file[0]);

            uploadData(fd);
        });


    });

// Sending AJAX request and upload file
    function uploadData(fd){
        $.ajax({
            type: 'post',
            url: 'index.php',
            data: fd,
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

// Added thumbnail
    function addThumbnail(data){
        $("#upload .upload-section > p").remove();
        let len = $("#upload div.thumbnail").length;

        let num = Number(len);
        num = num + 1;

        let name = data.name;
        let size = convertSize(data.size);
        let src = data.src;

        // Creating an thumbnail
        $("#upload").append('<div id="thumbnail_'+num+'" class="thumbnail"></div>');
        $("#thumbnail_"+num).append('<img src="'+src+'" width="100%" height="78%">');
        $("#thumbnail_"+num).append('<span class="size">'+size+'<span>');

    }

// Bytes conversion
    function convertSize(size) {
        let sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (size == 0) return '0 Byte';
        let i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
        return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }

});