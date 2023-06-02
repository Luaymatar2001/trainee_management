$(document).ready(function(){
	$.ajax({
		url: "bar/data2.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var type = [];
			var type1 = [];

			for(var i in data) {
				type.push(data[i].type);
				type1.push(data[i].type1);
				
			}

			var chartdatanew = {
				labels: type,
				datasets : [
				{
					label: 'Total',
					data: type1,
					backgroundColor: "rgba(59, 89, 152, 0.75)",
					borderColor: "rgba(59, 89, 152, 1)",
					borderWidth: 1
				}


				]
			};
		

			


			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdatanew
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});