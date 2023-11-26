<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Vue</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://unpkg.com/vue@3.0.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="./assets/css/style.css"> -->
	<style>
	</style>
</head>
	
<style>
	body {
    font-family: "Fahkwang", sans-serif, -apple-system, BlinkMacSystemFont,
      "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
      sans-serif;
    margin: 0;
  }
  
  .card:hover {
    transform: scale(1.05);
  }
  /* .card {
    margin: 20px 10px 20px 10px;
    padding: 20px 20px 20px 20px;
    transition: all 0.5s;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 600px;
  }
  
  .icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
  } */

	#app {
		background-color: rgb(102, 102, 51) !important;
	}

	.container-cal {
		background-color: rgb(102, 102, 51) !important;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	.container-adv {
		background-color: rgb(102, 102, 51) !important;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
</style>
<body>

	<div id="app">

        <div>
        <h1>{{timerOutput}}</h1>
        </div>

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



		<div class="container container-cal pb-4" id="adventtage">
			<div v-for="day in days" >
				<div class='card window bildbeschriftung' id="`${day.dayId}`">
					<img :src="`./assets/img/icon/${day.dayId}.png`" style='width: 150px; height: 150px; background-color: white'/>
				</div>
			</div>
		</div>
		

	
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

<script src="app.js"></script>
</body>
</html>