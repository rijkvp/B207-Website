<?php
function displayNav(string $activeMenu)
{
    echo '
    <!-- Navigation menu -->
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="index.html">B207.nl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            ';
    if($activeMenu == "Home")
    {
        echo '<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>';
    }
    else
    {
        echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>';
    }
    if($activeMenu == "Tools")
    {
        echo '<li class="nav-item active"><a class="nav-link" href="tools.php">Tools</a></li>';
    }
    else
    {
        echo '<li class="nav-item"><a class="nav-link" href="tools.php">Tools</a></li>';
    }
    if($activeMenu == "Themes")
    {
        echo '
        <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Thema&apos;s
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="themas/accounts.php">Accounts</a>
                <a class="dropdown-item" href="themas/html_css.php">HTML & CSS</a>
                <a class="dropdown-item" href="themas/js.php">JavaScript</a>
                <a class="dropdown-item" href="themas/php_sql.php">PhP & MySQL</a>
                <a class="dropdown-item" href="themas/modelleren.php">Modelleren</a>
                <a class="dropdown-item" href="themas/cyber_security.php">Cyber Security</a>
            </div>
        </li>';
    }
    else
    {
        {
            echo '
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Thema&apos;s
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="themas/accounts.php">Accounts</a>
                    <a class="dropdown-item" href="themas/html_css.php">HTML & CSS</a>
                    <a class="dropdown-item" href="themas/js.php">JavaScript</a>
                    <a class="dropdown-item" href="themas/php_sql.php">PhP & MySQL</a>
                    <a class="dropdown-item" href="themas/modelleren.php">Modelleren</a>
                    <a class="dropdown-item" href="themas/cyber_security.php">Cyber Sec</a>
                </div>
            </li>';
        }
    }
    if($activeMenu == "Colofon")
    {
        echo '<li class="nav-item active"><a class="nav-link" href="colofon.php">Colofon</a></li>';
    }
    else
    {
        echo '<li class="nav-item"><a class="nav-link" href="colofon.php">Colofon</a></li>';
    }
    echo '           
            </ul>
        </div>
    </nav>
    ';
}