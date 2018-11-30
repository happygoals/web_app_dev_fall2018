$(document).ready(function(){
	$.ajax({
			
		url: "../chartdata.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var items = [];
			var numbers = [];

			for(var i in data) {
				items.push(data[i].name);
				numbers.push(data[i].wouldPurchase);
			}
	

		var chartdata= {
				labels: items,
				datasets: [{
								label: '# of Votes',
								backgroundColor: 'rgba(200, 200, 200, 0.75)',
								borderColor: 'rgba(200, 200, 200, 0.75)',
								hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
								hoverBorderColor: 'rgba(200, 200, 200, 1)',
		        				borderWidth: 1,
								data: numbers
							}
						]
			};
			
			
			var ctx = $("#barGraph1");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});