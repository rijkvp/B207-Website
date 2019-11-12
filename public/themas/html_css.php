<?php
    require "../head_themes.php";
    head("Accounts");
?>
  <body>
    <?php 
        require "../theme_navigation.php"; 
        displayThemeNav("HTML & CSS");
    ?>
    <div class="jumbotron text-center">
        <h1>HTML & CSS</h1>
        <p>Bouw je eigen website!</p>
    </div>
    <div class="container">
        <div class="row panel">
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/html5.png" alt="CSS 3">
                <h3>HTML</h3>
                <p>HTML is de structuur en de content van je website.</p>
                <a href="" class="btn btn-info">HTML Voorbeelden</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/css3.png" alt="CSS 3">
                <h3>CSS</h3>
                <p>CSS is opmaak van je website.</p>
                <a href="../voorbeelden/css/voorbeeld1.html" class="btn btn-info">CSS Voorbeelden</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <h3>HTML & CSS Leren</h2>
            <ul>
                <li><a class="button" href="https://www.codecademy.com/">Codecademy</a> - Volg de 'Make a Website' cursus.</li>
                <li><a class="button" href="https://www.w3schools.com/html/default.asp">W3Schools HTML</a> & <a class="button" href="https://www.w3schools.com/css/default.asp">W3Schools CSS</a> Tutorial - Uitgebeide uitleg en documentatie over HTML & CSS.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <h3>Opdrachten</h3>
            <a href="../bronnen/tussenopdracht.pdf" class="btn btn-info">Tussenopdracht</a>
            <a href="../bronnen/eindopdracht.pdf" class="btn btn-info">Eindopdracht</a>
        </div>
    </div>
    <div class="container">
        <div class="row linkrow">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">HTML Links</div>
                    <div class="panel-body">
                        <a href="https://www.w3schools.com/html/default.asp">W3 Schools HTML tutorial</a>
                        <a href="https://www.lipsum.com/">Lorum Ipsum - Demotekst</a>
                        <a href="https://www.ascii.cl/htmlcodes.htm">Speciale Tekens</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">CSS Links</div>
                    <div class="panel-body">
                        <a href="https://www.w3schools.com/css/default.asp">W3 Schools CSS tutorial</a>
                        <a href="https://www.w3schools.com/colors/colors_picker.asp">HEX Kleuren Kiezer</a>
                        <a href="https://cssgradient.io/">CSS Gradient Generator</a>
                        <a href="https://fonts.google.com">Google Fonts - Gratis Lettertypes</a>
                        <a href="https://www.cssportal.com/css3-menu-generator/">CSS Menu Generator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "../footer.php" ?>
  </body>
</html>
