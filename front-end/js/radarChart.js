$(document).ready(function() {
	$.ajax({
		url: "/front-end/analytics/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var item = [];
			var would = [];
			
			var color = '255, 99, 132';
        	var borderColors = "rgba(" + color + ", 1.0)";
			var backgroundColors = "rgba(" + color + ", 0.2)";
            
            // calculate two values : (result) = (wouldPurchase) - (wouldRemove)
			for(var i in data) {
				item.push(data[i].name);
				var first = data[i].wouldPurchase;
				var second = data[i].wouldRemove;

				first = parseFloat(first.replace(',',''));
				 
				var total = (first - second);
				would.push(total);
			}
			//chart data
			var chartdata = {
				labels: item,
				datasets : [
					{
						label: '# of Votes',
        				backgroundColor: backgroundColors,
        				borderColor: borderColors,
        				borderWidth: 1,
						data: would
					}
				]
			};
			//option 
			var options = {
				responsive: true,
				title: {
					display: true,
					position: "top",
					text: "Item Popularity ('most common' - 'least common')",
					fontSize: 18,
					fontColor: "#111"
				},
				legend: {
					display: true,
					position: "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 16
					}
				}
			};

			var ctx = $("#radarChart1");

			var barGraph = new Chart(ctx, {
				type: 'radar',
				data: chartdata,
				options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});