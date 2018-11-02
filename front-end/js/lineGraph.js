var labels = ["Kitkat", "Starbucks coffee", "Cute cookie", "Sandwich", "Pizza"];
var data = [12, 19, 3, 5, 2];
var lineColor = '255, 99, 132';

addLineGraph("lineChart1", labels, data, lineColor);

function addLineGraph(targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var borderColors = "rgba(" + backgroundColorsIn + ", 1.0)";
	var backgroundColors = "rgba(" + backgroundColorsIn + ", 0.2)";

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