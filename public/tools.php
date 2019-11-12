<?php
    require "head.php";
    head("Tools");
?>
<body>
    <?php 
        require "navigation.php";
        displayNav("Tools");
    ?>
    <div class="jumbotron text-center">
        <h1>Tools</h1>
        <p>Maak het leven makkerijker met gratis hulpmiddelen.</p>
    </div>
    <div class="container">
        <div class="row panelrow">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">GitHub</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/github.png" alt="GitHub">
                        <p>De online opslagplek en versiebeheersysteem voor jouw eigen projecten inclusief backups.</p>
                        <div class="panel-footer">
                            <a href="https://github.com/" class="button">GitHub site</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">GitPod</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/gitpod.png" alt="GitPod">
                        <p>Online editor die communiceert via jouw GitHub-account.</p>
                        <div class="panel-footer">
                            <a href="https://www.gitpod.io/" class="button">GitPod site</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Codecademy</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/codecademy.png" alt=" Code Anywhere">
                        <p>Interactief platform dat gratis codeercursussen biedt in verschillende programmeertalen.</p>
                        <div class="panel-footer">
                            <a href="https://www.codecademy.com/" class="button">Codecademy site</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row linkrow">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Algemene Tools</div>
                    <div class="panel-body">
                        <a href="https://validator.w3.org/">W3 Validator</a>
                        <a href="https://www.lipsum.com/">Lorum Ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">HTML Tools</div>
                    <div class="panel-body">
                        <a href="https://www.ascii.cl/htmlcodes.htm">Speciale Tekens</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">CSS / Opmaak Tools</div>
                    <div class="panel-body">
                        <a href="http://jigsaw.w3.org/css-validator/">W3 Validator CSS</a>
                        <a href="https://www.w3schools.com/colors/colors_picker.asp">HEX Kleuren Kiezer</a>
                        <a href="https://cssgradient.io/">CSS Gradient Generator</a>
                        <a href="https://fonts.google.com">Google Fonts - Gratis Lettertypes</a>
                        <a href="https://www.cssportal.com/css3-menu-generator/">CSS Menu Generator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "footer.php"; ?>
</body>