<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Vue</title>
	<script src="https://unpkg.com/vue@3.0.2"></script>
	<style>
		.box {
			padding: 100px 0;
			width: 400px;
			text-align: center;
			background: #ddd;
			margin: 20px;
			display: inline-block;
		}
		body {
			background: #eee;
			max-width: 960px;
			margin: 20px auto;
		}
		p, h3, ul {
			margin: 0;
			padding: 0;
		}
		li {
			list-style-type: none;
			background: #fff;
			margin: 20px auto;
			padding: 10px 20px;
			border-radius: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		li.fav {
			background: #740a67;
			color: white;
		}
	</style>
</head>
<body>

	<div id="app">

    <div>
      <h1>{{timerOutput}}</h1>
    </div>
		<a v-bind:href="url" target="_blank">best website ever</a>

		<div v-if="showBooks">
			<p>{{title}} : {{author}} || {{age}}</p>
	
			<button @click="age++">Increase Age</button>
			<button @click="age--">Decrease Age</button>
		</div>


	</div>

<script src="app.js"></script>
</body>
</html>