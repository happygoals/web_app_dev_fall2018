var labels = ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"];
var data = [12, 19, 3, 5, 2, 3];
var data2 = [10, 9, 9, 15, 20, 4];
var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];

var lineColor = ['255, 99, 132']; //line graph takes only a single color, at least with a single function graph. Reuse the same method though

addChart("bar", "myChart1", labels, data, color);
addChart("line", "lineChart1", labels, data, lineColor);
addChart("line", "lineChart2", labels, data2, lineColor);
addChart("pie", "pieChart1", labels, data, color);
//addChart("polarArea", "polarChart1", labels, data, color);

function addChart(type, targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var borderColors = [];
	var backgroundColors = [];
	//at first glance, it might seem like we're making one unnecessary array here
	//but javascript does pass by reference for arrays if you change them. So we need to make a new one to avoid breaking
	//functionality if we have multiple line graphs
	
	for (var i=0; i<backgroundColorsIn.length; i++) {
		backgroundColors.push("rgba(" + backgroundColorsIn[i] + ", 0.2)");
		borderColors.push("rgba(" + backgroundColorsIn[i] + ", 1.0)");
	}

	var myChart = new Chart(ctx, {
		type: type,
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
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
}