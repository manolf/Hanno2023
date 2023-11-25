<?php 

require_once 'assets/configBootstrap.php';
define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';
?>


<body>
<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>


<head>
    <style>
        @media (max-width: 500px) {
            #schneeschaufeln{
                width: 100px;
                height: 100px;
            }

        }
    </style>
</head>

<div class=" container my-5 z-depth-1 rounded border">
<!--Section: Content-->
    <section class="dark-grey-text">

    <div class="row pr-lg-5">
        <div class="col-md-7 mb-4">

            <div class="view" >
                <img id = "movienight" src='assets/img/movie night_transp.png' alt="Logo Hanno und Rudo" style="width: 100%; height:auto;" class="img-fluid rounded">
            </div>

        </div>
        <div class="col-md-5 d-flex align-items-center mb-4">
            <div>

                <h3 class="font-weight-bold mb-4"> Gewinnspiel...</i> </h3>

                <br>

                <!-- Noch genau <br><h4><div style="color : white; background-color: rgb(102, 102, 51); text-align: center;">

                <?php

                 ?>
               </div></h4> (* Seite neu laden für Aktualisierung)
                <br>
                <br> -->
                ..Zeit zum Entspannen und Weihnachten zu genießen, nachdem du nun ausdauernd bis zum 24. mitgemacht hast!

                </p>
                Heuer möchten wir erstmals gerne unter allen Teilnehmer*innen Gooodies von Elf Hanno bzw Rudi verlosen</p>

                Was musst du dafür tun?<br>
                Nichts, außer uns deine Lieblinge mitzuteilen! <br>




<?php


echo "<hr>";
$userId = getCurrentUserId();

$bereitsTeilgenommen = checkTeilnehmer($userId);

if ($bereitsTeilgenommen > 0)
{
    echo "<b>Danke fürs Teilnehmen!<br> Wir wünschen dir viel Glück!</b>
    <br> Du wirst bis 31.12. benachrichtigt, wenn du gezogen wurdest!";
}
else
{

    echo "<br>Wähle nun bitte deine <b>3 Lieblingsworkouts</b>: ";
    $tabatas = ListTabatas();

    ?>


    <form action="teilnehmen.php" method="POST">
    <!--Grid column-->
        <div  class="col-md-10">   
            <p class="font-weight-bold">Workout 1:</p>
            <select name='wod1' id='wod1'>

            <?php
                foreach ($tabatas as $tabata)
                {
                    echo  "<option value=" . $tabata['tabataId'] ." name='wod1' class='form-control'>" . $tabata['dayId'] . ' ' .  $tabata['tabataName'] . ' ('.  $tabata['performedBy'].") </option>";
                }
            ?>
            </select>
            <br>
        </div>

        <div  class="col-md-10">   
            <p class="pt-3 font-weight-bold">Workout 2:</p>
            <select name='wod2' id='wod2'>
            <?php
                foreach ($tabatas as $tabata)
                {
                    echo  "<option value=" . $tabata['tabataId'] ." name='wod1' class='form-control'>" . $tabata['dayId'] . ' ' .  $tabata['tabataName'] . ' ('.  $tabata['performedBy'].") </option>";
                }
            ?>
            </select>
            <br>
        </div>

        <div  class="col-md-10">   
            <p class="pt-3 font-weight-bold">Workout 3:</p>
            <select name='wod3' id='wod3'>
            <?php
                foreach ($tabatas as $tabata)
                {
                    echo  "<option value=" . $tabata['tabataId'] ." name='wod1' class='form-control'>" . $tabata['dayId'] . ' ' .  $tabata['tabataName'] . ' ('.  $tabata['performedBy'].") </option>";
                }
            ?>
            </select>
            <br>
        </div>

        <?php 
        echo "<br>..und teile uns noch bitte Namen und Emailadresse mit, damit wir dich im Falle eines Gewinns verständigen können!";
        ?>


        <div class="row pt-1">
            <!-- Material outline input -->
            <div class="col-md-10">
                <div class="md-form md-outline">
                    <input type="name" name="name" class="form-control">
                    <label for="name">Name</label>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Material outline input -->
            <div class="col-md-10">
                <div class="md-form md-outline">
                    <input type="email" name="email" class="form-control">
                    <label for="email">Email</label>
                </div>
                <br>
            </div>
        </div>

        <input type="hidden" name="userId" value="<?php echo $userId ?>" />

        <button type="submit" class="btn btn-outline btn-success"">Gewinnen!<i class=" fa fa-paper-plane ml-2"></i></button>


</section>


    </div>
    <!--Grid column-->


</form>


  <?php  
}


?>


            </div>
        </div>
    </div>

    </section>
    <!--Section: Content-->
    </div>

</div>