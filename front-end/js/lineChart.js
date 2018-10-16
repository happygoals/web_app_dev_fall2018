var data = [12, 19, 3, 5, 2, 3];
var backgroundColor = ['rgba(255, 99, 132, 0.2)'];

addChart("lineChart1", data, backgroundColor);

var data2 = [10, 9, 9, 15, 20, 4];
addChart("lineChart2", data2, backgroundColor);

function addChart(targetID, inputData, backgroundColors) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
			datasets: [{
				label: '# of Votes',
				data: inputData,
				backgroundColor: backgroundColors,
				borderColor: ['rgba(255,99,132,1)'],
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