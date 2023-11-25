<?php 

require_once 'assets/configBootstrap.php';
define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';


?>


<body>
<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>

<?php 


$today = date('d', time());
$timeReady = isItTimeYet();
//faked:
// $today = 10;
// echo "heute: " . $today . "<br>";

//check admin
$admin = false;
if (getStatus($userId) == ("admin"))
    $admin = true;

if ($_GET['dayId']) 
{
    $dayId = $_GET['dayId'];
    $searchString = " ";
    $replaceString = "";
     
    $dayId = str_replace($searchString, $replaceString, $dayId); 
 


    if (($dayId <= $today) && ($timeReady) || $admin)
    //if($datumHeute >= $startDatum)
    {
        $data = getDay($dayId);
        $wodEasy = $data['easy'];
        $wodHard = $data['hard'];


?>

    <!DOCTYPE html>
    <html>

    <!-- <body style="background: white"> -->

        <div class="wrapper">

            <div class="left container container-day my-5 z-depth-1 rounded bg-white">
                <!--Section: Content-->
                <section class="dark-grey-text">
                    <div class="row pr-lg-5">
                        <div class="col-md-7 mb-4">
                            <div class="view">
                                <img src='assets/<?php echo $data['elfPic'] ?>' style="width: 100%; height:auto;" alt="elfPic" class="img-fluid mt-4 rounded">
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-center mb-4">
                            <div>
                                <h3 class="font-weight-bold mb-4"> Tag <?php echo $data['dayId'] ?></h3>
                                <h6><?php echo $data['beschreibung'] ?></h6>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Section: Content-->
            </div>


        </div>

        <?php
        if($wodEasy != '')
        {
              $dataEasy = getWod($wodEasy);

        ?>

        <div class="wrapper">

        <div class="left container container-day my-5 z-depth-1 rounded bg-white">
                <!--Section: Content-->
                <section class="dark-grey-text">
                    <div class="row pr-lg-5">

                        <!-- links -->
                        <div class="col-md-7 mb-4">

                            <section>
                                <p> Hier ist dein Wod! </p>
                                <div class="form-group">

                                    <h3 class="text-success font-weight-bold"><?php echo $dataEasy['tabataName'] ?></h3>

                                        <p>
                                            <?php echo $dataEasy['description'] ?>
                                        </p>
                                        <p> <strong>Musik: </strong> <?php echo $dataEasy['music'] ?></p>
                                        <p> <strong>performed by: </strong>  <?php echo $dataEasy['performedBy'] ?></p>

                                        <h6>Wenn ihr das Workout geschafft habt, einfach den grünen Button klicken.</h6>


                                        <a href="index.php/tabata/add/<?=$dataEasy['tabataId']?>/<?=$dayId?>"class="btn btn-outline btn-success">Workout absolviert</a>

                                    
                                        <hr>
                                </div>
                            </section>
                        </div>

                        <!-- rechts -->
                        <div class="col-md-5 d-flex align-items-center mb-4">

                        <div id="video" style="width:100%;">
                            <?php
                            if ($dataEasy['link'] != '') {
                            echo $dataEasy['link'];
                            } else {
                            echo " kein Video vorhanden ";
                            }


                            ?>
                            </div>

                        </div>
                    </div>
                </section>
                <!--Section: Content-->
            </div>
        </div>


<?php

                }
                else
                {
                    echo "<p>Oh nein, die Elfen haben noch kein WOD hinterlegt :-(</p>";
                }


                    if($wodHard != '')
                    {
                            $dataHard = getWod($wodHard);
                            echo "<p>Hurra, heute gibt es sogar ein weiteres WORKOUT!!</p>";

                            ?>

                            <div class="wrapper">

                            <div class="left container container-day my-5 z-depth-1 rounded bg-white">
                                    <!--Section: Content-->
                                    <section class="dark-grey-text">
                                        <div class="row pr-lg-5">

                                            <!-- links -->
                                            <div class="col-md-7 mb-4">

                                                <section>
                                                    <p class="pb-3 "> Hier ist dein PowerWod! </p>
                                                    <div class="form-group">

                                                        <h3 class="text-danger font-weight-bold"><?php echo $dataHard['tabataName'] ?></h3>

                                                            <p>
                                                                <?php echo $dataHard['description'] ?>
                                                            </p>
                                                            <p> <strong>Musik: </strong> <?php echo $dataHard['music'] ?></p>
                                                            <p> <strong>performed by: </strong>  <?php echo $dataHard['performedBy'] ?></p>

                                                            <h6>Powerworkout geschafft? einfach den roten Button klicken.</h6>

                                                            
                                        <a href="index.php/tabata/add/<?=$dataHard['tabataId']?>/<?=$dayId?>"class="btn btn-outline btn-danger">Power-Workout absolviert</a>

                                                            <hr>
                                                    </div>
                                                </section>
                                            </div>

                                            <!-- rechts -->
                                            <div class="col-md-5 d-flex align-items-center mb-4">

                                            <div id="video" style="width:100%;">
                                                <?php
                                                if ($dataHard['link'] != '') {
                                                echo $dataHard['link'];
                                                } else {
                                                echo " kein Video vorhanden ";
                                                }


                                                ?>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <!--Section: Content-->
                                </div>
                            </div>







                        <?php
                    }
}
    else
    {


        ?>

            <div class="col-md-10 border rounded m-4 p-4">
                <div class="container">         
                        <div>
                            <h1 class="text-success pt-2 text-center">du bist ungeduldig...</h1>
                        </div>
                        <div>
                            <img class='error rudolf_error' src="assets/img/rudolf_error.png" style="width: 500px; height: 250px" alt="error" class="img-fluid rounded">

                            <p>..es sieht so aus, als könntest du es kaum erwarten!
                

                            <span class="text-success"> <br>Aber: Kopf hoch!</span> <br>Die Zeit wird noch kommen! Sie vergeht schneller, als du denkst!</p>


                        </div>


                </div>
            </div>

    <?php

    }

    ?>


<?php include __DIR__.'/templates/footer.php'?>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
</body>
</html>

<?php
}
else
{
    echo "php loves me";
}
?>
