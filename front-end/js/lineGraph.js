var data = [12, 19, 3, 5, 2, 3];
var color = ['255, 99, 132'];

addChart("lineChart1", data, color);

var data2 = [10, 9, 9, 15, 20, 4];
addChart("lineChart2", data2, color);

function addChart(targetID, inputData, backgroundColorsIn) {
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
		type: 'line',
		data: {
			labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
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