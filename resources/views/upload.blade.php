<!DOCTYPE html>
<html lang="en">
<head>
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
            src="http://code.jquery.com/jquery-3.3.1.min.js"
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
        <a>MITSCHRIFT-FLASHCARDS</a>
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
                        <p>Bold text is more important than normal content</p>
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
            <h3><span class="font-weight-bold">Choose a file</span> and drag it into here</h3>
        </div>
    </div>
</div>

<footer>
    <div class="text-center p-3 footer-text" id="footerclass">
        <a>&copy; 2018 Copyright: Mitschrift-Flashcards</a>
        <a data-toggle="modal" data-target=".bd-example-modal-lg">Impressum</a>
    </div>

</footer>

<div id="mod-reg" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Register</h4>
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
                <h4 class="modal-title" id="exampleModalLabel">Login</h4>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Impressum</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und
                    Offenlegungspflicht laut §25 Mediengesetz.</p>
                <p>
                <p>Maximilian Groß</p>
                <p>Rennweg 89, <br/>1030 Wien, <br/>Österreich</p>
                <p>
                    <strong>Tel.:</strong> 01234/56789<br/>
                    <strong>Fax:</strong> 01234/56789-0<br/>
                    <strong>E-Mail:</strong> <a class="orange-link" href="mailto:maximilian.gross@htl.rennweg.at">maximilian.gross@htl.rennweg.at</a>
                </p>
                <h2>EU-Streitschlichtung</h2>
                <p>Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten
                    wir Sie über die Online-Streitbeilegungsplattform (OS-Plattform) informieren.<br/>
                    Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der
                    Europäischen Kommission unter <a class="orange-link"
                                                     href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE"
                                                     target="_blank" class="external" rel="nofollow">http://ec.europa.eu/odr?tid=221093411</a>
                    zu richten. Die dafür notwendigen Kontaktdaten finden Sie oberhalb in unserem Impressum.</p>
                <p>Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an
                    Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
                <h2>Haftung für Inhalte dieser Webseite</h2>
                <p>Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle
                    Informationen bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf
                    dieser Webseite übernehmen, speziell für jene die seitens Dritter bereitgestellt wurden.</p>
                <p>Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitten wir Sie uns umgehend zu
                    kontaktieren, Sie finden die Kontaktdaten im Impressum.</p>
                <h2>Haftung für Links auf dieser Webseite</h2>
                <p>Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind.
                    Haftung für verlinkte Websites besteht laut <a class="orange-link"
                                                                   href="https://www.ris.bka.gv.at/Dokument.wxe?Abfrage=Bundesnormen&Dokumentnummer=NOR40025813&tid=221093411"
                                                                   target="_blank" rel="noopener nofollow"
                                                                   class="external">§ 17 ECG</a> für uns nicht, da wir
                    keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch
                    bisher nicht aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten
                    bekannt werden.</p>
                <p>Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitten wir Sie uns zu kontaktieren, Sie
                    finden die Kontaktdaten im Impressum.</p>
                <h2>Urheberrechtshinweis</h2>
                <p>Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Falls
                    notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich
                    verfolgen.</p>
                <h2>Bildernachweis</h2>
                <p>Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich geschützt.</p>
                <p>Die Bilderrechte liegen bei den folgenden Fotografen und Unternehmen:</p>
                <ul>
                    <li>Fotograf Mustermann</li>
                </ul>
                <h1>Datenschutzerklärung</h1>
                <h2>Datenschutz</h2>
                <p>Wir haben diese Datenschutzerklärung (Fassung 13.05.2019-221093411) verfasst, um Ihnen gemäß der
                    Vorgaben der Datenschutz-Grundverordnung (EU) 2016/679 und dem <a class="orange-link"
                                                                                      href="https://www.ris.bka.gv.at/GeltendeFassung.wxe?Abfrage=Bundesnormen&Gesetzesnummer=10001597&tid=221093411"
                                                                                      target="_blank"
                                                                                      rel="noopener nofollow"
                                                                                      class="external">Datenschutzgesetz
                        (DSG)</a> zu erklären, welche Informationen wir sammeln, wie wir Daten verwenden und welche
                    Entscheidungsmöglichkeiten Sie als Besucher dieser Webseite haben.</p>
                <p>Leider liegt es in der Natur der Sache, dass diese Erklärungen sehr technisch klingen, wir haben uns
                    bei der Erstellung jedoch bemüht die wichtigsten Dinge so einfach und klar wie möglich zu
                    beschreiben.</p>
                <h2>Automatische Datenspeicherung</h2>
                <p>Wenn Sie heutzutage Webseiten besuchen, werden gewisse Informationen automatisch erstellt und
                    gespeichert, so auch auf dieser Webseite.</p>
                <p>Wenn Sie unsere Webseite so wie jetzt gerade besuchen, speichert unser Webserver (Computer auf dem
                    diese Webseite gespeichert ist) automatisch Daten wie</p>
                <ul>
                    <li>die Adresse (URL) der aufgerufenen Webseite</li>
                    <li>Browser und Browserversion</li>
                    <li>das verwendete Betriebssystem</li>
                    <li>die Adresse (URL) der zuvor besuchten Seite (Referrer URL)</li>
                    <li>den Hostname und die IP-Adresse des Geräts von welchem aus zugegriffen wird</li>
                    <li>Datum und Uhrzeit</li>
                </ul>
                <p>in Dateien (Webserver-Logfiles).</p>
                <p>In der Regel werden Webserver-Logfiles zwei Wochen gespeichert und danach automatisch gelöscht. Wir
                    geben diese Daten nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim Vorliegen
                    von rechtswidrigem Verhalten eingesehen werden.<br/>
                    Die Rechtsgrundlage besteht nach <a class="orange-link"
                                                        href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&from=DE&tid=221093411"
                                                        target="_blank" rel="noopener nofollow" class="external">Artikel
                        6  Absatz 1 f DSGVO</a> (Rechtmäßigkeit der Verarbeitung) darin, dass berechtigtes Interesse
                    daran besteht, den fehlerfreien Betrieb dieser Webseite durch das Erfassen von Webserver-Logfiles zu
                    ermöglichen.</p>
                <h2>Cookies</h2>
                <p>Unsere Website verwendet HTTP-Cookies um nutzerspezifische Daten zu speichern.<br/>
                    Im Folgenden erklären wir, was Cookies sind und warum Sie genutzt werden, damit Sie die folgende
                    Datenschutzerklärung besser verstehen.</p>
                <h3>Was genau sind Cookies?</h3>
                <p>Immer wenn Sie durch das Internet surfen, verwenden Sie einen Browser. Bekannte Browser sind
                    beispielsweise Chrome, Safari, Firefox, Internet Explorer und Microsoft Edge. Die meisten Webseiten
                    speichern kleine Text-Dateien in Ihrem Browser. Diese Dateien nennt man Cookies.</p>
                <p>Eines ist nicht von der Hand zu weisen: Cookies sind echt nützliche Helferlein. Fast alle Webseiten
                    verwenden Cookies. Genauer gesprochen sind es HTTP-Cookies, da es auch noch anderer Cookies für
                    andere Anwendungsbereiche gibt. HTTP-Cookies sind kleine Dateien, die von unserer Website auf Ihrem
                    Computer gespeichert werden. Diese Cookie-Dateien werden automatisch im Cookie-Ordner, quasi dem
                    „Hirn“ Ihres Browsers, untergebracht. Ein Cookie besteht aus einem Namen und einem Wert. Bei der
                    Definition eines Cookies müssen zusätzlich ein oder mehrere Attribute angegeben werden.</p>
                <p>Cookies speichern gewisse Nutzerdaten von Ihnen, wie beispielsweise Sprache oder persönliche
                    Seiteneinstellungen. Wenn Sie unsere Seite wieder aufrufen, übermittelt Ihr Browser die
                    „userbezogenen“ Informationen an unsere Seite zurück. Dank der Cookies weiß unsere Website, wer Sie
                    sind und bietet Ihnen Ihre gewohnte Standardeinstellung. In einigen Browsern hat jedes Cookie eine
                    eigene Datei, in anderen wie beispielsweise Firefox sind alle Cookies in einer einzigen Datei
                    gespeichert.</p>
                <p>Es gibt sowohl Erstanbieter Cookies als auch Drittanbieter-Cookies. Erstanbieter-Cookies werden
                    direkt von unserer Seite erstellt, Drittanbieter-Cookies werden von Partner-Webseiten (z.B. Google
                    Analytics) erstellt. Jedes Cookie ist individuell zu bewerten, da jedes Cookie andere Daten
                    speichert. Auch die Ablaufzeit eines Cookies variiert von ein paar Minuten bis hin zu ein paar
                    Jahren. Cookies sind keine Software-Programme und enthalten keine Viren, Trojaner oder andere
                    „Schädlinge“. Cookies können auch nicht auf Informationen Ihres PCs zugreifen.</p>
                <p>So können zum Beispiel Cookie-Daten aussehen:</p>
                <ul>
                    <li>Name: _ga</li>
                    <li>Ablaufzeit: 2 Jahre</li>
                    <li>Verwendung: Unterscheidung der Webseitenbesucher</li>
                    <li>Beispielhafter Wert: GA1.2.1326744211.152221093411</li>
                </ul>
                <p>Ein Browser sollte folgende Mindestgrößen unterstützen:</p>
                <ul>
                    <li>Ein Cookie soll mindestens 4096 Bytes enthalten können</li>
                    <li>Pro Domain sollen mindestens 50 Cookies gespeichert werden können</li>
                    <li>Insgesamt sollen mindestens 3000 Cookies gespeichert werden können</li>
                </ul>
                <h3>Welche Arten von Cookies gibt es?</h3>
                <p>Die Frage welche Cookies wir im Speziellen verwenden, hängt von den verwendeten Diensten ab und wird
                    in der folgenden Abschnitten der Datenschutzerklärung geklärt. An dieser Stelle möchten wir kurz auf
                    die verschiedenen Arten von HTTP-Cookies eingehen.</p>
                <p>Man kann 4 Arten von Cookies unterscheiden:</p>
                <p>
                    <strong>Unbedingt notwendige Cookies<br/>
                    </strong>Diese Cookies sind nötig, um grundlegende Funktionen der Website sicherzustellen. Zum
                    Beispiel braucht es diese Cookies, wenn ein User ein Produkt in den Warenkorb legt, dann auf anderen
                    Seiten weitersurft und später erst zur Kasse geht. Durch diese Cookies wird der Warenkorb nicht
                    gelöscht, selbst wenn der User sein Browserfenster schließt.</p>
                <p>
                    <strong>Funktionelle Cookies<br/>
                    </strong>Diese Cookies sammeln Infos über das Userverhalten und ob der User etwaige Fehlermeldungen
                    bekommt. Zudem werden mithilfe dieser Cookies auch die Ladezeit und das Verhalten der Website bei
                    verschiedenen Browsern gemessen.</p>
                <p>
                    <strong>Zielorientierte Cookies<br/>
                    </strong>Diese Cookies sorgen für eine bessere Nutzerfreundlichkeit. Beispielsweise werden
                    eingegebene Standorte, Schriftgrößen oder Formulardaten gespeichert.</p>
                <p>
                    <strong>Werbe-Cookies<br/>
                    </strong>Diese Cookies werden auch Targeting-Cookies genannt. Sie dienen dazu dem User individuell
                    angepasste Werbung zu liefern. Das kann sehr praktisch, aber auch sehr nervig sein.</p>
                <p>Üblicherweise werden Sie beim erstmaligen Besuch einer Webseite gefragt, welche dieser Cookiearten
                    Sie zulassen möchten. Und natürlich wird diese Entscheidung auch in einem Cookie gespeichert.</p>
                <h3>Wie kann ich Cookies löschen?</h3>
                <p>Wie und ob Sie Cookies verwenden wollen, entscheiden Sie selbst. Unabhängig von welchem Service oder
                    welcher Website die Cookies stammen, haben Sie immer die Möglichkeit Cookies zu löschen, nur
                    teilweise zuzulassen oder zu deaktivieren. Zum Beispiel können Sie Cookies von Drittanbietern
                    blockieren, aber alle anderen Cookies zulassen.</p>
                <p>Wenn Sie feststellen möchten, welche Cookies in Ihrem Browser gespeichert wurden, wenn Sie
                    Cookie-Einstellungen ändern oder löschen wollen, können Sie dies in Ihren Browser-Einstellungen
                    finden:</p>
                <p>
                    <a class="orange-link" href="https://support.google.com/chrome/answer/95647?tid=221093411"
                       class="external" rel="nofollow">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
                </p>
                <p>
                    <a class="orange-link"
                       href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=221093411" class="external"
                       rel="nofollow">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
                </p>
                <p>
                    <a class="orange-link"
                       href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=221093411"
                       class="external" rel="nofollow">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
                        Ihrem Computer abgelegt haben</a>
                </p>
                <p>
                    <a class="orange-link"
                       href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=221093411"
                       class="external" rel="nofollow">Internet Explorer: Löschen und Verwalten von Cookies</a>
                </p>
                <p>
                    <a class="orange-link"
                       href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=221093411"
                       class="external" rel="nofollow">Microsoft Edge: Löschen und Verwalten von Cookies</a>
                </p>
                <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er
                    Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie
                    entscheiden, ob Sie das Cookie erlauben oder nicht. Die Vorgangsweise ist je nach Browser
                    verschieden. Am besten ist es Sie suchen die Anleitung in Google mit dem Suchbegriff “Cookies
                    löschen Chrome” oder „Cookies deaktivieren Chrome“ im Falle eines Chrome Browsers oder tauschen das
                    Wort „Chrome“ gegen den Namen Ihres Browsers, z.B. Edge, Firefox, Safari aus.</p>
                <h3>Wie sieht es mit meinem Datenschutz aus?</h3>
                <p>Seit 2009 gibt es die sogenannten „Cookie-Richtlinien“. Darin ist festgehalten, dass das Speichern
                    von Cookies eine Einwilligung des Website-Besuchers (also von Ihnen) verlangt. Innerhalb der
                    EU-Länder gibt es allerdings noch sehr unterschiedliche Reaktionen auf diese Richtlinien. In
                    Österreich erfolgte aber die Umsetzung dieser Richtlinie in § 96 Abs. 3 des
                    Telekommunikationsgesetzes (TKG).</p>
                <p>Wenn Sie mehr über Cookies wissen möchten und vor technischen Dokumentationen nicht zurückscheuen,
                    empfehlen wir <a class="orange-link" href="https://tools.ietf.org/html/rfc6265" target="_blank"
                                     rel="nofollow noopener" class="external">https://tools.ietf.org/html/rfc6265</a>,
                    dem Request for Comments der Internet Engineering Task Force (IETF) namens „HTTP State Management
                    Mechanism“.</p>
                <h2>Speicherung persönlicher Daten</h2>
                <p>Persönliche Daten, die Sie uns auf dieser Website elektronisch übermitteln, wie zum Beispiel Name,
                    E-Mail-Adresse, Adresse oder andere persönlichen Angaben im Rahmen der Übermittlung eines Formulars
                    oder Kommentaren im Blog, werden von uns gemeinsam mit dem Zeitpunkt und der IP-Adresse nur zum
                    jeweils angegebenen Zweck verwendet, sicher verwahrt und nicht an Dritte weitergegeben.</p>
                <p>Wir nutzen Ihre persönlichen Daten somit nur für die Kommunikation mit jenen Besuchern, die Kontakt
                    ausdrücklich wünschen und für die Abwicklung der auf dieser Webseite angebotenen Dienstleistungen
                    und Produkte. Wir geben Ihre persönlichen Daten ohne Zustimmung nicht weiter, können jedoch nicht
                    ausschließen, dass diese Daten beim Vorliegen von rechtswidrigem Verhalten eingesehen werden.</p>
                <p>Wenn Sie uns persönliche Daten per E-Mail schicken – somit abseits dieser Webseite – können wir keine
                    sichere Übertragung und den Schutz Ihrer Daten garantieren. Wir empfehlen Ihnen, vertrauliche Daten
                    niemals unverschlüsselt per E-Mail zu übermitteln.</p>
                <p>Die Rechtsgrundlage besteht nach <a class="orange-link"
                                                       href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&from=DE&tid=221093411"
                                                       target="_blank" rel="noopener nofollow" class="external">Artikel
                        6  Absatz 1 a DSGVO</a> (Rechtmäßigkeit der Verarbeitung) darin, dass Sie uns die Einwilligung
                    zur Verarbeitung der von Ihnen eingegebenen Daten geben. Sie können diesen Einwilligung jederzeit
                    widerrufen – eine formlose E-Mail reicht aus, Sie finden unsere Kontaktdaten im Impressum.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>