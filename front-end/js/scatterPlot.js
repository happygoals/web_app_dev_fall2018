var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];
	
$(document).ready(function(){
	$.ajax({
		url: "/front-end/analytics/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
		//data
		var item = [];
		var xPoints = [];
        var yPoints = [];
        var would = [];
        
		//color
		var colors = [];
		var borderColors = [];
	    var backgroundColors = [];
        
        
	for (var i=0; i<color.length; i++) {
		colors.push("rgba(" + color[i] + ", 1.0)");
		backgroundColors.push("rgba(" + color[i] + ", 0.2)");
        borderColors.push("rgba(" + color[i] + ", 1.0)");
	}

        //put the data in the item array and the would array 
    	for(var i in data) {
			item.push(data[i].name);
            xPoints[i] = data[i].wouldPurchase;
            yPoints[i] = data[i].wouldRemove;
            var x = xPoints[i];
            var y = yPoints[i];
            var json = {x: x, y: y};
            would.push(json); 			
    		
    	}
    		var ctx = $("#scatterPlot1");
			var scatterChart = new Chart(ctx, {
			    type: 'scatter',
			    data: {
			    	labels: item,
			        datasets: [{
			            label: '# of Votes',
			            data: would,
			            pointBackgroundColor: colors,
			            borderColor: borderColors,
			            hoverBackgroundColor: borderColors,
			            backgroundColor: backgroundColors,
			            borderWidth: 1
			        }]
			    },
			    options: {				        
			    		responsive: true,
				        title: {
				            display: true,
				            position: "top",
				            text: "Item Popularity (x = 'Like', y = 'Dislike')",
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
    					 },

			        scales: {
			            xAxes: [{
			                type: 'linear',
			                position: 'bottom'
			            }]
			        }
			    }
			});

		},
		error: function(data) {
			console.log(data);
		}
	});
});