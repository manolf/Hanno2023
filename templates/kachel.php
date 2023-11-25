<div class='card  window bild_beschriftung id= <?= $day['dayId'] ?>'>
    <a <?= $notClickable ?> href='day.php?dayId= <?= $day['dayId'] ?>'>  <img class='caro <?= $kachelType ?>'
     src= "./assets/img/icon/<?= $day['dayId'] ?>.png" 
    style='width: 150px; height: 150px; background-color: white' alt='icon'></a>
    <input type='hidden' name='dayId' value= <?= $day['dayId'] ?>>
</div>


