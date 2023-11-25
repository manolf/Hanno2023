<?php 

require_once 'assets/configBootstrap.php';
?>


<body>
<?php include __DIR__.'/templates/navbar.php'?>
<?php include __DIR__.'/templates/jumbotron.php'?>

<div class="container-contact z-depth-1 m-4 p-4 rounded border">


<!--Section: Content-->
<!-- <section class=" "> -->
<!-- px-md-5 mx-md-5 text-center text-lg-left dark-grey-text -->

<!--Grid row-->
<div class="contact-left row">

    <!--Grid column-->
    <div>
        <!-- class="col-lg-5 col-md-12 mb-0 mb-md-0" -->
        <h3 class="font-weight-bold">Redet Tacheles mit uns!</h3>

        <p class="text-muted">Huhu, jetzt seid ihr dran! Wie gefällt euch unsere Seite? Was brennt euch unter den Nägeln? Was auch immer: lasst es uns wissen! </p>

        <p><span class="font-weight-bold mr-2">Email:</span><a href="">feedback@fitmithanno.fun</a></p>

    </div>
    <!--Grid column-->
    <form action="createMessage.php" method="POST">
        <!--Grid column-->
        <div>
            <!-- class="col-lg-7 col-md-12 mb-4 mb-md-0" -->


            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-5">

                    <!-- Material outline input -->
                    <div class="md-form md-outline mb-0">
                        <input type="text" name="vorname" class="form-control">
                        <label for="vorname">Vorname</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5">

                    <!-- Material outline input -->
                    <div class="md-form md-outline mb-0">
                        <input type="text" name="nachname" class="form-control">
                        <label for="nachname">Nachname</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <div class="row">
                <!-- Material outline input -->
                <div class="col-md-10">
                    <div class="md-form md-outline">
                        <input type="email" name="email" class="form-control">
                        <label for="email">E-mail</label>
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <!-- Material outline input -->
                <div class="col-md-10">
                    <div class="md-form md-outline">
                        <input type="text" name="subject" class="form-control">
                        <label for="subject">Worum gehts?</label>
                    </div>
                </div>
                <br>
            </div>

            <!--Material textarea-->
            <div class="row">
                <div class="col-md-10">
                    <div class="md-form md-outline mb-3">
                        <textarea name="message" class="md-textarea form-control" rows="3"></textarea>
                        <label for="message">Leg los - die Zeilen gehören dir!</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn ml-0 text-light" style="background-color:rgb(102, 102, 51)">Senden<i class=" fa fa-paper-plane ml-2" "></i></button>

        </div>
        <!--Grid column-->


    </form>


    <div class = "contact-right row">
        <img id = "brieferl" src="assets/img/briefe_transparent.png" style="width: 100%; height:auto;" alt="Briefe lesender Hanno" class="img-fluid rounded">
    </div>


</div>
    <!--Grid row-->


<!-- </section> -->
<!--Section: Content-->




</div>
<br><br><br> <br><br><br>

<?php include __DIR__.'/templates/footer.php'?>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
</body>
</html>