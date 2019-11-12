<?php
function displayThemeNav(string $activeTheme)
{
    echo '
    <!-- Navigation menu -->
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="../index.php">B207.nl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../tools.php">Tools</a></li>';
                echo '
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
                        Thema&apos;s
                    </a>
                    <div class="dropdown-menu">';
                        if ($activeTheme == "Accounts")
                            echo '<a class="dropdown-item active" href="accounts.php">Accounts</a>';
                        else
                            echo '<a class="dropdown-item" href="accounts.php">Accounts</a>';
                        if ($activeTheme == "HTML & CSS")
                            echo '<a class="dropdown-item active" href="html_css.php">HTML & CSS</a>';
                        else
                            echo '<a class="dropdown-item" href="html_css.php">HTML & CSS</a>';
                        if ($activeTheme == "JavaScript")
                            echo '<a class="dropdown-item active" href="js.php">JavaScript</a>';
                        else
                            echo '<a class="dropdown-item" href="js.php">JavaScript</a>';
                        if ($activeTheme == "PHP & MySQL")
                            echo '<a class="dropdown-item active" href="php_sql.php">PHP & MySQL</a>';
                        else
                            echo '<a class="dropdown-item" href="php_sql.php">PHP & MySQL</a>';
                        if ($activeTheme == "Modelleren")
                            echo '<a class="dropdown-item active" href="modelleren.php">Modelleren</a>';
                        else
                            echo '<a class="dropdown-item" href="modelleren.php">Modelleren</a>';
                        if ($activeTheme == "Cyber Security")
                            echo '<a class="dropdown-item active" href="cyber_security.php">Cyber Security</a>';
                        else
                            echo '<a class="dropdown-item" href="cyber_security.php">Cyber Security</a>';
                    echo '
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../colofon.php">Colofon</a></li>
            </ul>
        </div>
    </nav>';
}