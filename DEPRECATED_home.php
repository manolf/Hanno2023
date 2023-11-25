<?php 

require_once 'assets/configBootstrap.php';
define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';

?>


<body>
<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>



<div class=" container my-5 z-depth-1 rounded border">
<!--Section: Content-->
<section class="dark-grey-text">

    <div class="row pr-lg-5">
        <div class="col-md-7 mb-4">

            <div class="view">
                <img src='assets/img/handstand_anim.gif' alt="Handstand Hanno" style="width: 629px; height: 629px" class="img-fluid rounded">
            </div>

        </div>
        <div class="col-md-5 d-flex align-items-center mb-4">
            <div>

                <h3 class="font-weight-bold mb-4"> Hurra und hereinspaziert...</i> </h3>

                <br>

                <p>... es soweit! <br><br>

                <!-- Noch genau <br><h4><div style="color : white; background-color: rgb(102, 102, 51); text-align: center;">

                <?php
                //Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden)
                echo $day . " Tag(e)<br> ";

                echo $houre . " Stunde(n)<br> ";
                echo $min . " Minute(n) *<br> ";
                //echo $sec . " Sec * ";

                 ?>
               </div></h4> (* Seite neu laden für Aktualisierung)
                <br>
                <br> -->
                Unsere sportliche Adventszeit hat begonnen!
                Und heuer erstmalig in Form von Tabataworkouts mit animiertem Hanno und motivierender Hintergrundmusi.


                </p> <br>
                Jeden Tag - bis Weihnachten - öffnet sich ein Türchen und dann kannst du das <strong>Adventsworkout des Tages </strong> wählen!</p>

                <br>
                Und Hanno ist dieses Mal nicht alleine: <br>
                Es wird unregelmäßig <strong> reale Gastsportler*innen </strong> geben, welche die Workouts in real time mitmachen!
                <br>Möchtest auch du Teil der motivierten Hanno-Tabata-Gemeinde sein und ein workout mitgestalten: einfach melden! <br>
                Elf Hanno ist schon ganz aus dem Häuschen <br>er schlägt bereits Räder!

                <br><br>
                Du kannst dich bereits jetzt anmelden, um deinen <strong>Adventskalender </strong> zu erstellen. Aber: die Türen öffnen sich erst, wenn die Zeit reif ist!
                <br>




            </div>
        </div>
    </div>

</section>
<!--Section: Content-->
</div>

<?php $days = getAllDays(); ?>

<div class="container container-cal" id="adventtage">

    <?php foreach($days as $day):?>
        
            <?php include 'templates/kachel.php'?>
        
    <?php endforeach;?>

<?php include __DIR__.'/footer.php'?>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
</body>
</html>