
var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];

$(document).ready(function(){
	$.ajax({
		url: "/front-end/analytics/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var item = [];
			var would = [];
			
			//
        	var borderColors = [];
        	var backgroundColors = [];
        	
        	for (var i=0; i<color.length; i++) {
        		backgroundColors.push("rgba(" + color[i] + ", 0.2)");
        		borderColors.push("rgba(" +color[i] + ", 1.0)");
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
				],
            options: {
                 responsive: true,
                 title: {
                    display: true,
                    position: "top",
                    text: "Item Popularity",
                    fontSize: 18,
                    fontColor: "#111"
                },
                scales: {
                    xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
                }
            }
		};

			var ctx = $("#scatterPlot1");

			var barGraph = new Chart(ctx, {
				type: 'scatter',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});