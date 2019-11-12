<?php
    require "../head_themes.php";
    head("PHP & MySQL");
?>
  <body>
    <?php 
        require "../theme_navigation.php"; 
        displayThemeNav("PHP & MySQl");
    ?>
    <div class="jumbotron text-center">
        <h1>PHP & MySQL</h1>
        <p>Bouw je eigen dynamische webpaginas met databases!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/php.png" alt="PHP">
                <h3>PHP</h3>
                <p>Serverside scripttaal voor dynamische webpaginas.</p>
                <a href="#" class="btn btn-info">Voorbeelden</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/sql.png" alt="MySQL">
                <h3>MySQL</h3>
                <p>Opensource-managementsysteem voor databases met SQL.</p>
                <a href="#" class="btn btn-info">Voorbeelden</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <h3>PHP Leren</h2>
            <ul>
                <li><a href="https://www.w3schools.com/php/default.asp">W3Schools PhP</a> - Leer alles over PhP.</li>
                <li><a href="https://www.codecademy.com/learn/learn-php">Codecademy Learn PhP</a> - Codeacdemy cursus over de basis van PhP.</li>
                <li><a href="https://www.learn-php.org/">Learn-php.org</a> - Website om PhP te leren.</li>
            </ul>
        </div>
        <div class="panel">
            <h3>(My)SQL Leren</h2>
            <ul>
                <li><a href="https://www.w3schools.com/sql/default.asp">W3Schools SQL</a> - Leer alles over SQL.</li>
                <li><a href="https://www.codecademy.com/learn/learn-sql">Codecademy Learn SQL</a> - Codeacdemy cursus over de basis van SQL.</li>
            </ul>
        </div>
    </div>
    <?php require "../footer.php" ?>
  </body>
</html>
