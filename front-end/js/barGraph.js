var labels = [];
var numbers = [];

$(document).ready(function(){
	$.ajax({
		url: "/front-end/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
				var ctx = document.getElementById(targetID).getContext('2d');
				var borderColors = [];
            	var backgroundColors = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255'];

			for(var i in data) {
				labels.push(data[i].name);
				numbers.push(data[i].wouldPurchase);
			}

	for (var i=0; i<backgroundColorsIn.length; i++) {
		backgroundColors.push("rgba(" + backgroundColorsIn[i] + ", 0.2)");
		borderColors.push("rgba(" + backgroundColorsIn[i] + ", 1.0)");
	}
	

		var testdata= {
				labels: labels,
		datasets: [{
						label: '# of Votes',
        				backgroundColor: backgroundColors,
        				borderColor: borderColors,
        				borderWidth: 1,
						data: numbers
					}
				]
			};

			
			
			var ctx = document.getElementById(targetID).getContext('2d');

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: testdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});