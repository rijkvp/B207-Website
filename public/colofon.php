<?php
    require "head.php";
    head("Colofon");
?>
<body>
    <?php
        require "navigation.php";
        displayNav("Colofon");
    ?>
      <div class="jumbotron text-center">
        <h1>Colofon</h1>
    </div>
    <div class="container">
        <h5>Ontwikkeling & Design</h5>
        <p>Rijk van Putten</p>
        <h5>Afbeeldingen</h5>
        <p>Stockfoto's door <a href="https://unsplash.com/">Unsplash</a>. <br> De andere plaatjes zijn allemaal logo's. 
            <br> Voor het icoontje heb ik <a href="https://realfavicongenerator.net">Real Favicon Generator</a> gebruikt.</p>
        <h5>Foto's</h5>
        <p>De code is helemaal zelf geschreven. Veel dingen zijn via bootstrap gedaan.
            Sommige kleine stukjes zijn van <a href="https://www.w3schools.com/bootstrap4/">W3 Schools Bootstrap 4</a> gekopieerd en dan vervolgens aangepast aan eigen wens. 
        Ook heb ik een paar kleine trucjes van <a href="https://css-tricks.com/">CSS-Tricks</a> gebruikt.</p>
        <p>Ik ben gewend om namen en commentaar in de code in het Engels te schrijven. Dat heb ik ook in dit project gedaan.</p>
        <h5>Framework</h5>
        <p>PHP met <a href=https://getbootstrap.com/">Bootstrap 4</a> en natuurlijk HTML5 en CSS3.</p>
        <h5>Validatie</h5>
        <div>
            <!-- w3 Validator Bagde -->
            <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Frijk-van-putten.github.io%2FB207-Website%2F">
                <img src="img/html5_badge.png" alt="Valid HTML!" height="31" width="88" />
            </a>
            <!-- w3 Validator CSS Bagde -->
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Frijk-van-putten.github.io%2FB207-Website%2Fpublic%2Fcss%2Fstyle.css">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </div>
        <p><strong>Let op:</strong> De CSS validator ondersteunt nog geen <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/--*">custom properties</a>. Negeer daarom a.u.b. de 'parse errors'.</p>
    </div>
    <?php require "footer.php"; ?>
</body>