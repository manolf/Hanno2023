
<?php

require_once 'assets/configBootstrap.php';
define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';
?>


<body>
<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>

<?php

if ($_POST) 
{
    //table wod

  //  $userId = $_SESSION['user'];
    
    $wod1 = $_POST['wod1'];
    $wod2 = $_POST['wod2'];
    $wod3 = $_POST['wod3'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['userId'];

    saveDataUser($userId, $name, $email);
    saveFavoTabatas($userId,$wod1, $wod2, $wod3);

    echo "<div class='text-dark pt-2 pb-2'>";
    echo "<p><center><b>Vielen Dank!<br> Wir halten dir die Daumen </b></center></p>";
    echo "<center> <img src='assets/img/movie night_transp.png' alt='thankyou' style='width:365; height: 440px' ></center>";


}
else

echo "irgendwas ist schief gelaufen..";