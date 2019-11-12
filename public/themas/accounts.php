<?php
    require "../head_themes.php";
    head("Accounts");
?>
  <body>
    <?php 
        require "../theme_navigation.php"; 
        displayThemeNav("Accounts");
    ?>
    <div class="jumbotron text-center">
        <h1>Accounts</h1>
        <p>Alle accounts die je nodig hebt voor de informatica lessen.</p>
    </div>
    <div class="container">
        <div class="row panel">
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/github.png" alt="GitHub logo">
                <h3>GitHub</h3>
                <p>De online opslagplek en versiebeheersysteem voor jouw eigen projecten inclusief backups.</p>
                <a href="https://github.com/" class="btn btn-info">GitHub site</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/gitpod.png" alt="GitPod logo">
                <h3>GitPod</h3>
                <p>Online editor die communiceert via jouw GitHub-account.</p>
                <a href="https://www.gitpod.io/" class="btn btn-info">GitPod site</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/codecademy.png" alt="Codecademy logo">
                <h3>Codecademy</h3>
                <p>Interactief platform dat gratis codeercursussen biedt in verschillende programmeertalen.</p>
                <a href="https://www.codecademy.com/" class="btn btn-info">Codecademy site</a>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="../img/codeanywhere.png" alt="Code Anywhere logo">
                <h3>Code Anywhere</h3>
                <p>Met je Code Anywhere account kun je overal aan je Informatica-projecten werken.</p>
                <a href="https://codeanywhere.com/" class="btn btn-info">Code Anywhere site</a>
            </div>
        </div>
    </div>
    <?php require "../footer.php" ?>
</body>
