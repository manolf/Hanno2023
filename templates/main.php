<?php 

require_once './assets/configBootstrap.php';

?>

<body>
    <?php if (!isItTimeYet()) {  ?>
        <div id="app">
            <div>
                <p class="pt-3" style="color: rgb(153, 0, 0);">{{timerOutput}}</p>
            </div>
        </div>
<?php  } ?>

<?php include __DIR__.'/navbar.php'?>
<?php include __DIR__.'/jumbotron.php'?>

<?php include 'homeText.php'?>

<?php

$admin = false;
if (getStatus($userId) == ("admin"))
    $admin = true;

$offeneKacheln = getOffeneKachelnByUserId($userId);
$kachelDays = array();

$today = date('d', time());

//faked:
//  $today = 10;
// echo "heute: " . $today . "<br>";

$notClickable = "";
$timeReady = isItTimeYet();

foreach ($offeneKacheln as $kachel)
{
    $kachelDays[] = $kachel["dayId"];
}

?>

<div class="container container-cal pb-5" id="adventtage" >

    <?php foreach($days as $day):?>
        <?php if (strlen($day['dayId']) < 3) {?>

            <?php 

                if ( ($day['dayId'] > $today) || (!$timeReady) && (!$admin) )
                {
                    $kachelType = 'notReady';
                    $notClickable = "onclick='return false'";
                }
                        

                if (in_array( $day['dayId'], $kachelDays))
                {
                    foreach ($offeneKacheln as $kachel)
                    {
                        if($kachel["dayId"] == $day['dayId'])
                        {
                            $linkShort = $kachel["linkShort"];
                            $tabataName = $kachel ["tabataName"];
                            include 'kachelClicked.php'; 
                        }
                    }
                }
                else 
                {
                    include 'kachel.php';
                }

                    
            
            ?>
        
        <?php }?>
            
    <?php endforeach;?>


    <br>
</div>


<div class="container container-yoga py-5" id="yoga" >

    <h1>Yogaspecials</h1>

    <div class='card notReady window bild_beschriftung id= <?= $day['dayId'] ?>'>
        <a <?= $notClickable ?> href='day.php?dayId= <?= $day['dayId'] ?>'>  <img class='caro <?= $kachelType ?>'
        src= "./assets/img/icon_gruener_elf.png" 
        style='width: 150px; height: 150px; background-color: white' alt='icon'></a>
        <input type='hidden' name='dayId' value= <?= $day['dayId'] ?>>
    </div>

    <div class='card notReady window bild_beschriftung id= <?= $day['dayId'] ?>'>
        <a <?= $notClickable ?> href='day.php?dayId= <?= $day['dayId'] ?>'>  <img class='caro <?= $kachelType ?>'
        src= "./assets/img/icon_gruener_elf.png" 
        style='width: 150px; height: 150px; background-color: white' alt='icon'></a>
        <input type='hidden' name='dayId' value= <?= $day['dayId'] ?>>
    </div>

    <div class='card notReady window bild_beschriftung id= <?= $day['dayId'] ?>'>
        <a <?= $notClickable ?> href='day.php?dayId= <?= $day['dayId'] ?>'>  <img class='caro <?= $kachelType ?>'
        src= "./assets/img/icon_gruener_elf.png" 
        style='width: 150px; height: 150px; background-color: white' alt='icon'></a>
        <input type='hidden' name='dayId' value= <?= $day['dayId'] ?>>
    </div>

    <div class='card notReady window bild_beschriftung id= <?= $day['dayId'] ?>'>
        <a <?= $notClickable ?> href='day.php?dayId= <?= $day['dayId'] ?>'>  <img class='caro <?= $kachelType ?>'
        src= "./assets/img/icon_gruener_elf.png" 
        style='width: 150px; height: 150px; background-color: white' alt='icon'></a>
        <input type='hidden' name='dayId' value= <?= $day['dayId'] ?>>
    </div>



    <br>
</div>


<br>
<br>
<br>

<?php include __DIR__.'/footer.php'?>


<script src="app.js"></script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
</body>
</html>