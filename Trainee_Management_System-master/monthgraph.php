<!DOCTYPE html>
<html>
<head>
	<title>ChartJS - BarGraph</title>
	<style type="text/css">
	#chart-container {
		width: 640px;
		height: auto;
	}
</style>
</head>
<body>
	<form method="POST" action="">
		<div id="chart-container" >
			<div>
				<center>
					<h3>Mounth vs Trainee Graph</h3>

					<center> <canvas align="right" id="mycanvas"></canvas></center>
				</center>
			</div> 
			

				<button id="save-btn" style="background-color: yellow" onclick="myFunction()">PDF</button>
</br></br>
		</div>
	</form>
	
	

			
	<!-- javascript -->
	<script type="text/javascript" src="bar_chart/jquery.min.js"></script>
	<script type="text/javascript" src="bar_chart/Chart.min.js"></script>
	<script type="text/javascript" src="bar/monthgraph.js"></script>
	<script type="text/javascript" src="mjs/FileSaver.min.js"></script>
	<script type="text/javascript" src="mjs/canvas-toBlob.js"></script>
	<script type="text/javascript">
		function myFunction() {
  window.print();
}

	</script>
</body>
</html>