<?php 

require_once './assets/configBootstrap.php';

?>

<body>
<div id="app">

    <div>
        <h3 style="color: rgb(153, 0, 0);">{{timerOutput}}</h3>
    </div>
</div>

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
// $today = 10;
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
        
        
    <?php endforeach;?>




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