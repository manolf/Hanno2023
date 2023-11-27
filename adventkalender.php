<?php
session_start();
// error_reporting(-1);
// ini_set('display_errors','On');

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';

$userId = getCurrentUserId();
echo "<br>". $userId;

setcookie('userId', $userId, strtotime ('+30 days')); 

$countUserId = checkUser($userId);

if($countUserId < 1)
	saveUserinDB($userId);
else
	echo "User bereits in DB";
echo "userId" . $userId;

$result = getOffeneKachelnByUserId($userId);
echo "<pre>";
var_dump($result);
echo "</pre>";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Vue</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://unpkg.com/vue@3.0.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./assets/css/stylesheetVue.css">
	<style>
	</style>
</head>

<body>

	<div id="app">

	<?php echo $userId?>

		<countdown></countdown>
		<kalender :userId=<?php echo $userId?>></kalender>

		<!-- Import App -->
		<script src="app.js"></script>
		<script src="./components/Countdown.js"></script>
		<script src="./components/Kalender.js"></script>


		<!-- <a v-bind:href="url" target="_blank">best website ever</a>
        <div>
            <button @click="testAxios">TEST AXIOS</button>
        </div>

        {{testData}}

		<br>
		<div>
			<button @click="fetchAllData">Fetch All Data</button>
		</div>
		{{allData}}
        <br> -->

		<!-- geht nun mit mounted -->
        <!-- <div>
            <button class="btn btn-outline btn-success" @click="getAllDays">Get All Days</button>
        </div> -->


        	<!-- {{days}} -->
			<!-- <div class="container container-cal pb-4" id="adventtage">
				<div v-for="day in days" >
					<div class='card window bildbeschriftung' id="`${day.dayId}`">
						<img :src="`./assets/img/icon/${day.dayId}.png`" style='width: 150px; height: 150px; background-color: white'/>
					</div>
				</div>
			</div> -->



		

	
		<h2>Adventspecials</h2>
		<div class="container container-adv pb-4" id="sonntage">
				<div class='card window bildbeschriftung' id="sonntag1">
					<img src="./assets/img/icon_gruener_elf.png" style='width: 150px; height: 150px; background-color: orange'/>
				</div>
				<div class='card window bildbeschriftung' id="sonntag2">
					<img src="./assets/img/icon_gruener_elf.png" style='width: 150px; height: 150px; background-color: gold'/>
				</div>
				<div class='card window bildbeschriftung' id="sonntag3">
					<img src="./assets/img/icon_gruener_elf.png" style='width: 150px; height: 150px; background-color: blue'/>
				</div>
				<div class='card window bildbeschriftung' id="sonntag4">
					<img src="./assets/img/icon_gruener_elf.png" style='width: 150px; height: 150px; background-color: violet'/>
				</div>
		</div>



	</div>

	<!-- Mount App -->
	<script>
		const mountedApp = app.mount('#app')
	</script>

</body>
</html>