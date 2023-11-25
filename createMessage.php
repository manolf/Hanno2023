<?php 

require_once 'assets/configBootstrap.php';

if ($_POST) 
{

    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
  
  
    //  $sql = "INSERT into messages (vorname, nachname, email, subject, message)  values ('$vorname', '$nachname','$email', '$subject','$message')";
  
      //Mailserver
      $to = "feedback@fitmithanno.fun";
      $subject = $subject;
      $txt = $message;
  
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
      // More headers
      $headers .= 'From: <webmaster@fitmithanno.fun>' . "\r\n";
      //$headers .= 'Cc: myboss@example.com' . "\r\n";
  
      mail($to, $subject, $txt, $headers);
  
  ?>

<body>
    <?php include __DIR__.'/templates/navbar.php'?>
    <?php include __DIR__.'/templates/jumbotron.php'?>


    <div class= 'text-dark pt-2 pb-2'>
        <p><center><b>Vielen Dank für deine Message!</b></center></p>
        <p><center><b><Wir haben dein Feedback erhalten</b></center></p>
    

        <center><img src='assets/img/rudolf.png' alt='rudi'style='width:276px; height:463px' ></center>
        <br>
        <br>
        <center><a href='./index.php'><button type='button' class='btn btn-outline-success'>keine Ursache!</button></a></center>
    </div>


    <?php

        include __DIR__.'/templates/footer.php';
}

        ?>

</body>


</html>