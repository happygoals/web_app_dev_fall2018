var labels = ["Kitkat", "Starbucks coffee", "Cute cookie", "Sandwich", "Pizza"];
var data = [12, 19, 3, 5, 2];
var data2 = [10, 9, 9, 15, 20];
var lineColor = ['255, 99, 132']; //line graph takes only a single color, at least with a single function graph. Reuse the same method though

addChart("lineChart1", labels, data, lineColor);
addChart("lineChart2", labels, data2, lineColor);

function addChart(targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var borderColors = [];
	var backgroundColors = [];
	
	for (var i=0; i<backgroundColorsIn.length; i++) {
		backgroundColors.push("rgba(" + backgroundColorsIn[i] + ", 0.2)");
		borderColors.push("rgba(" + backgroundColorsIn[i] + ", 1.0)");
	}

	var lineGraph = new Chart(ctx, {
		type: "line",
		data: {
			labels: inputLabels,
			datasets: [{
				label: '# of Votes',
				data: inputData,
				backgroundColor: backgroundColors,
				borderColor: borderColors,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
					   autoSkip: false
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
}