var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];

	var ctx = $("#scatterPlot1");
	
$(document).ready(function(){
	$.ajax({
		url: "/front-end/analytics/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
		var item = [];
		var xPoints = [];
        var yPoints = [];
        var would = [];


	//color
	var colors = [];
	
	for (var i=0; i<color.length; i++) {
		colors.push("rgba(" + color[i] + ", 1.0)");
	}

        //put the data in the item array and the would array 
    	for(var i in data) {
				item.push(data[i].name);
				//would.push("{x:"+data[i].wouldPurchase+", " + "y:"+data[i].wouldRemove+"}");   // the value pair of x and y

            xPoints[i] = data[i].wouldPurchase;
            yPoints[i] = data[i].wouldRemove;
            x = xPoints[i];
            y = yPoints[i];
            var json = {x: x, y: y};
            would.push(json); 			
    		
    	}
			
			var scatterChart = new Chart(ctx, {
			    type: 'scatter',
			    data: {
			        datasets: [{
			            label: 'Scatter Dataset',
			            data: would,
			            pointBackgroundColor: colors
			        }]
			    },
			    options: {
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