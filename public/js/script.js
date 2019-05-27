$(document).ready(function() {

    let keytoken = 'loginToken';

    if (sessionStorage.getItem(keytoken) !== null) {
        document.querySelector('#login').setAttribute('data-toggle','');
        document.querySelector('#login').setAttribute('data-target','');
        document.querySelector('#login').setAttribute('href','/MSF/public/Dashboard');
        document.querySelector('#login').classList.remove('mr-4');
        document.querySelector('#login').innerHTML='Dashboard';
        document.querySelector('#register').innerHTML='';
    }

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

                uploadData(fd, sessionStorage.getItem(keytoken));
            });

        });

// Sending AJAX request and upload file
        function uploadData(fd, token) {


            if(token === null) {
                return;
            }

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
                    console.log('test')
                    msg = JSON.parse(msg);
                    console.log(msg);
                    if (msg.valid) {
                        swal('File uploaded!','','success');
                    } else {
                        swal('Error!','','error');
                    }
                })
                .fail(function (xhr, status, error) {
                    swal('Error!','','error');
                });

        }

    $("#registerButton").on("click", function() {

        let username = $("#registerUsername").val();

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
                msg = JSON.parse(msg);
                if (msg.token !== null) {
                    swal('Registered!',msg.token,'success');
                } else {
                    swal('Error!','','error');
                }
            })
            .fail(function (xhr, status, error) {
                swal('Error!','','error');
            });

    }

    });
