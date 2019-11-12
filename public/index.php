<?php
    require "head.php";
    head("Home");
?>
<body>
    <?php
        require "slideshow.php";
        require "navigation.php";
        displayNav("Home");
    ?>
    <div class="container">
        <h1>Welkom op B207.nl!</h1>
        <h5>Op deze website kan je allerlei informatie vinden over het vak informatica.</h5>
    </div>
     <!-- Theme panels-->
     <div class="container">
        <div class="row panelrow">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Accounts</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/github.png" alt="HTML 5">
                        <div class="panel-footer">
                            <a href="themas/accounts.html" class="button">Ga naar Accounts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">HTML & CSS</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/html_css.png" alt="HTML & CSS">
                        <div class="panel-footer">
                            <a href="themas/html_css.html" class="button" >Ga naar HTML & CSS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">JavaScript</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/js.png" alt="JavaScript">
                        <div class="panel-footer">
                            <a href="themas/js.html" class="button" >Ga naar JavaScript</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">PHP & MySQL</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/php_sql.png" alt="PHP & SQL">
                        <div class="panel-footer">
                            <a href="themas/php_sql.html" class="button" >Ga naar PhP & MySQL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Modelleren</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/birds.jpg" alt="Modelleren">
                        <div class="panel-footer">
                            <a href="themas/modelleren.html" class="button" >Ga naar Modelleren</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Cyber Security</div>
                    <div class="panel-body">
                        <img class="img-responsive" src="img/cyber_security.jpg" alt="Cyber Security">
                        <div class="panel-footer">
                            <a href="themas/cyber_security.html" class="button" >Ga naar Cyber Security</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
</body>