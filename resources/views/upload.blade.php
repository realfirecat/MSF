<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="referrer" content="none">
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--script src="js/bootstrap.js"></script-->
    <title>MSF</title>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/loginscript.js') }}"></script>
</head>

<body>

<div class="navigation">
    <div class="nav-left mt-5">
        <a>MITSCHRIFT FLASHCARDS</a>
    </div>
    <div class="nav-right mt-5">
        <a class="mr-4" data-toggle="modal" data-target="#mod-log">LOGIN</a>
        <a class="mr-4" data-toggle="modal" data-target="#mod-reg">REGISTER</a>
        <a class="button" href="#section4">Upload file</a>
    </div>
</div>

<div id="section1" class="landing-page">
    <div class="text-center-div text-center">
        <h1>Mitschrift Flashcards</h1>
        <h2>The easiest way to convert your own notes <br> into easy learnable Flashcards.</h2>
        <div class="text-center mt-5">
            <a class="button landing-button" href="#section3">READ INSTRUCTIONS</a>
        </div>
    </div>
</div>

<div id="section2">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="info-block col-lg-4 text-center">
                <i class="fas fa-file-upload mt-3"></i>
                <h4 class="mt-4">Easy File Upload</h4>
                <p>Just upload your own notes by following the instructions and dragging them into the upload section
                    below.</p>
            </div>
            <div class="info-block col-lg-4 text-center">
                <i class="fas fa-infinity mt-3"></i>
                <h4 class="mt-4">24 / 7 Availability</h4>
                <p>This site will be available for use at any time and without any interruption. You will always be able
                    to convert your personal files.</p>
            </div>
            <div class="info-block col-lg-4 text-center">
                <i class="fas fa-globe mt-3"></i>
                <h4 class="mt-4">International Use</h4>
                <p>There is no problem with converting files in different languages. Where ever you are from, it makes
                    no difference.</p>
            </div>
        </div>
    </div>
</div>

<div id="section3">
    <div class="header-text-instructions text-center pt-5">
        <h2>Instructions for file upload</h2>
        <p>Here you can find all the informations your need to upload your files correctly.</p>
        <a class="orange-link" href="DownloadFile1/" download>Download Template File</a>
    </div>
    <div class="rules mt-5 mb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 1</h4>
                        <p>Header 1 defines the topic.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 2</h4>
                        <p>Header 2 is a new flashcard.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 3</h4>
                        <p>Italic texts are quotes.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 4</h4>
                        <p>Underlined text is important.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 5</h4>
                        <p>Bullet points are noted as enumerations.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 6</h4>
                        <p>All new headers are new flashcards.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 7</h4>
                        <p>If one header borders under another, it will be ignored.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 8</h4>
                        <p>Links will be accepted.</p>
                    </div>
                </div>
                <div class="col-lg-4 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 9</h4>
                        <p>Other special content will be converted into content.</p>
                    </div>
                </div>
                <div class="col-lg-12 rule-block p-3">
                    <div class="rule-cards p-5">
                        <h4>Rule 10</h4>
                        <p>Every spacing marks a new flashcard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section4" class="pb-5">
    <div class="header-text-upload text-center pt-5">
        <h2>Upload </h2>
        <p>Upload your own notes by dragging them into the box below.</p>
    </div>
    <div class="upload container mt-5">
        <div class="text-center-div">
            <h3><span class="font-weight-bold">Choose a file</span> or drag it into here</h3>
        </div>
    </div>
</div>

<footer>
    <div class="text-center p-3 footer-text">
        <a>� 2018 Copyright: Mitschrift Flashcards</a>
    </div>
</footer>

<div id="mod-reg" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="return false;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" id="registerUsername">
                    </div>
                    <button type="submit" class="btn btn-primary" id="registerButton">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="mod-log" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="return false;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Token" id="token">
                    </div>
                    <button type="submit" class="btn btn-primary" id="loginbutton">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>