var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];


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

	//color
	var colors = [];
	
	for (var i=0; i<color.length; i++) {
		colors.push("rgba(" + color[i] + ", 1.0)");
	}

        //put the data in the item array and the would array 
    	for(var i in data) {
				item.push(data[i].name);
				would.push("{x:"+data[i].wouldPurchase+"," + "y:"+data[i].wouldRemove+"}");   // the value pair of x and y
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
				            text: "Item Popularity (x = 'like', y = 'dislike')",
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

			var ctx = $("#scatterPlot1");

			var scatterPlot = new Chart(ctx, {
				type: 'scatter',
				data: chartdata,
				options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});