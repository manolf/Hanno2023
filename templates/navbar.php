<nav class="navbar sticky-top navbar navbar-expand-sm navbar-dark" style="background-color: rgb(102, 102, 51)">

        <button class="navbar-toggler navbar-toggler-left btn-lg" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container-nav collapse navbar-collapse" id="navbarTogglerDemo02">

            <div class="navbar-left">
                <img class="icon border" src="./assets/img/icon/rudolf_glasses.png" />

            </div>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="tabata.php">tabata</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="background-color: rgb(153, 0, 0); color: white" href="adventkalender.php">Adventkalender</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="team.php">team</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="kontakt.php">kontakt</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" role="button" href="https://www.facebook.com/profile.php?id=100087709973763" target="_blank" style="color:white"><i class="fa fa-facebook-f"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" role="button" href="https://www.instagram.com/elf.hanno/" target="_blank" style="color:white"><i class="fa fa-instagram"></i></a>
                </li>

<!-- 
                <li class="nav-item">
                    <a class="nav-link bg-danger" href="gewinnspiel.php">Gewinnspiel</a>
                </li> -->

            </ul>


        <?php
      if (isset($_SESSION["user"]))  {

?>

  <div class="navbar-right">
      <ul class="navbar-nav">
          <li class="nav-item fadeout">
              <?php
              echo $userRow['userEmail'] . '&nbsp'; ?>
          </li>
          <li class="nav-item">
              <a href="registration/logout.php?logout">logout</a>
          </li>

          <?php
  }      elseif (isset($_SESSION["access_token"])) {

    ?>

    <div class="navbar-right">
        <ul class="navbar-nav">
            <li class="nav-item fadeout">
                <?php
              echo $_SESSION['email'] . '&nbsp'; ?>
            </li>
            <li class="nav-item">
                <a href="registration/logout.php?logout">logout</a>
            </li>



      <?php
  }
  else {

      ?>


          <div class="navbar-right">
              <ul class="navbar-nav">

                  <!-- <li class="nav-item">
                      <a class="nav-link " href="./registration/login.php">login</a>
                  </li> -->

                  <?php
                  if(!isset($countOffeneKacheln)  || ($countOffeneKacheln == 0))
                  {

                ?>
                    <li class="nav-item">
                    <img class="icon border" src="./assets/img/icon/rudolf_glasses.png" />
                  </li>

                  
                 



                  <?php
                   }
                  if(isset($countOffeneKacheln) && ($countOffeneKacheln > 0))
                    {

  
                  ?>
     
                    <li class="nav-item">
                        <a class= "text-light" href="#index.php/cart">geöffnete Türchen (<?= $countOffeneKacheln ?>)</a>      
                    </li>

                <?php
                }
                ?>

              </ul>
          </div>

      <?php

  }
      ?>

  </div>

    </nav>
