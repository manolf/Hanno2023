<?php
    require_once 'assets/configBootstrap.php';
    define('CONFIG_DIR', __DIR__.'/config');
    require_once __DIR__.'/includes.php';
?>

<!DOCTYPE html>
<html>

<!-- <head>
    <link rel="stylesheet" href="style.css">
    <title>Impressum</title>
</head> -->


<body>

<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>

    <div class="container-warning ml-5 mr-5mt-5 mb-5">
        <section class="warning2">
            <br><br>
            Bei vorliegener Webseite handelt es sich um keine kommerzielle Website - wir sind daher laut nachfolgender Verordnungen nicht von der Impressionspflicht betroffen.
            <br>

            <h5 class="text-danger mt-3">
                
                <strong> Informationspflichten nach der Datenschutz-Grundverordnung (DSGVO)</strong>
                <br>
                <strong> Datenschutzerklärung nach dem Telekommunikationsgesetz (TKG)</strong>
            </h5>
            <br>


            Es werden keinerlei Cookies (außer im Rahmen des Sessionsmanagements) gespeichert.
            <br>
            Sämtliche Daten welche im Rahmen der Registrierung auf der Site angegeben werden, werden ausschließlich zu Zuordnungszwecken verwendet und nicht an Dritte weitergegeben.
            <br>

            <h4 class="text-danger mt-4"><strong>Urheberrecht</strong></h4>
            Alle Texte, Fotos und grafischen Gestaltungen auf dieser Internetpräsenz sind urheberrechtlich geschützt und dürfen nicht ohne unsere Einwilligung übernommen und verwendet werden.

            <br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include __DIR__.'/templates/footer.php'?>

</body>

</html>
