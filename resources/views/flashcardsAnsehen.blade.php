<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flashcardsAnsehen.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/flashcardsAnsehen.js') }}"></script>
    <title>MSF</title>
</head>
<body>


<div class="navigation">
    <div class="nav-left mt-4">
        <a>MITSCHRIFT FLASHCARDS</a>
    </div>
    <div class="nav-right mt-4">
        <a class="button mr-3" href="http://localhost/">Upload</a>
        <a class="mr2 dropdown">
            <a id="username" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Username
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item">Dashboard</a>
                <a class="dropdown-item" id="logoutbutton">Logout</a>
            </div>
        </a>
    </div>
</div>

<div id="section1" class="container flashcards-page">
    <h1 class="text-center">Flashcards</h1>
    <div class="searchbar form-group has-search input-group">
        <input type="text" class="form-control" placeholder="Kategorie suchen..." id="searchbox">
        <div class="input-group-append">
            <a class="input-group-text" id="random-input"><i class="fas fa-random"></i></a>
        </div>
    </div>




    <div class="accordion" id="accordion">

    </div>
</div>

<footer class="align-bottom">
<div class="text-center p-3 footer-text">
    <a>© 2018 Copyright: Mitschrift Flashcards</a>
</div>
</footer>

</body>
</html>
