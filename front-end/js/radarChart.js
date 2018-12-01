var radarColor = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255'];

$(document).ready(function(){
	$.ajax({
		url: "/front-end/analytics/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var item = [];
			var would = [];
			
			var borderColors = [];
        	var backgroundColors = [];
        	
        	for (var i=0; i<radarColor.length; i++) {
        		backgroundColors.push("rgba(" + radarColor[i] + ", 0.2)");
        		borderColors.push("rgba(" +radarColor[i] + ", 1.0)");
        	}

            for(var i in data) {
				item.push(data[i].name);
				would.push(data[i].wouldPurchase);
			}
			
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
            
            var ctx = $("#radarChart1");

			var radarChart = new Chart(ctx, {
				type: 'radar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});