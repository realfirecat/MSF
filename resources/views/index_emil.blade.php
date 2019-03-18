<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/emil-work.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <title>MSF</title>
</head>
<body>

<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-transparent pl-5 pr-5 pt-4">
    <a class="navbar-brand" href="#">MSF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
            <a class="button ml-3" href="#upload">Start Converting</a>
        </form>
    </div>
</nav>

<div id="main-section">
    <div class="centered-text-in-div color-white container text-center">
        <h1 class="mb-3">Mitschrift Flashcards</h1>
        <h2 class="mb-5">The best way to convert your own Notes into<br>easy learnable Flashcards.</h2>
        <a class="button3 mr-3" href="#" data-toggle="modal" data-target="#exampleModal">Read Instructions</a> <a
            class="button2" href="#upload">Start Converting</a>
    </div>
</div>

<div id="upload" class="mt-5 pt-5">
    <div class="text-center">
        <h3>Convert</h3>
        <p>Start converting your own notes into flashcards.</p>
    </div>
    <div class="upload-section container mt-5">
        <div class="centered-text-in-div">
            <p class="drag"><span class="bold-drag">Choose a File</span> or drag it here.</p>
        </div>
    </div>
</div>

<footer>
    <div class="container footer">
        <div class="footer-msf">
            <a>MSF - Mitschrift Flashcards</a>
        </div>
        <div class="footer-bottom">
            <div class="footer-iwas">
                <a>Impressum</a>
            </div>
            <div class="footer-cr">
                <a>Copyright</a>
            </div>
        </div>
    </div>
</footer>


<!-- MODAL -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Instructions for file upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Regel 1: <span class="font-bold">Überschrift 1</span> gibt das <span class="font-bold">Thema</span> an <br> <small>zB. GGP</small></p>
                <p>Regel 1: <span class="font-bold">Überschrift 1</span> gibt das <span class="font-bold">Thema</span> an <br> <small>zB. GGP</small></p>
            </div>
            <div class="modal-footer">
                <a class="button" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>

<script src="js/collapse.js"></script>
</body>
</html>
