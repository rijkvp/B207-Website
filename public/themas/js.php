<?php
    require "../head_themes.php";
    head("JavaScript");
?>
<body>
    <?php 
        require "../theme_navigation.php"; 
        displayThemeNav("JavaScript");
    ?>
    <div class="jumbotron text-center">
        <h1>JavaScript</h1>
        <p>Interactiviteit en animaties voor op websites.</p>
    </div>
    <div class="container">
        <div class="row panel">
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/js.png" alt="JavaScript Logo">
                <h3>Javascript</h3>
                <p>Een veelgebruikte scripttaal om webpagina's interactief te maken.</p>
                <a href="#" class="btn btn-info">JavaScript Voorbeelden</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/p5.png" alt="P5">
                <h3>Processing P5</h3>
                <p>Een Javascript-bibliotheek voor animaties op je website.</p>
                <a href="https://p5js.org/" class="btn btn-info">Site</a>
                <a href="#" class="btn btn-info">P5 Voorbeelden</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <h3>JavaScript Leren</h2>
            <ul>
                <li><a href="https://www.w3schools.com/js/default.asp">W3Schools JavaScript</a> - Leer alles van JavaScript op W3Schools.</li>
                <li><a href="https://www.codecademy.com/learn/introduction-to-javascript">Codecademy JavaScript</a> -  Volg de 'Introduction to JavaScript' cursus op Codecademy.</li>
                <li><a href="https://www.learn-js.org/">Learn-Js.org</a> -  Een website om JavaScript te leren.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <h3>Processing P5 Leren</h2>
            <ul>
                <li><a href="https://p5js.org/learn/">P5 Officiële Tutorials</a> - Volg de officiële tutorials op de P5 website.</li>
                <li><a href="https://p5js.org/reference/">P5 Refecence</a> - De officiële documentatie van P5.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row linkrow">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">JavaScript Links</div>
                    <div class="panel-body">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                        <a href="#">Link 5</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Processing Links</div>
                    <div class="panel-body">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Libraries Links</div>
                    <div class="panel-body">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Overige Links</div>
                    <div class="panel-body">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "../footer.php" ?>
</body>