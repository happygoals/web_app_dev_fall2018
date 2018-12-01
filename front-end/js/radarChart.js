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
        	
        	//color setting
        	for (var i=0; i<radarColor.length; i++) {
        		backgroundColors.push("rgba(" + radarColor[i] + ", 0.2)");
        		borderColors.push("rgba(" +radarColor[i] + ", 1.0)");
        	}

            for(var i in data) {
				item.push(data[i].name);
				would.push(data[i].wouldPurchase);
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