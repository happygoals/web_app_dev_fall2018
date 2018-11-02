var labels = ["Kitkat", "Starbucks coffee", "Cute cookie", "Sandwich", "Pizza"];
var data = [12, 19, 3, 5, 2];
var color = '255, 99, 132';

addRadarChart("radarChart1", labels, data, color);

function addRadarChart(targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var borderColors = "rgba(" + backgroundColorsIn + ", 1.0)";
	var backgroundColors = "rgba(" + backgroundColorsIn + ", 0.2)";

	var radarChart = new Chart(ctx, {
		type: "radar",
		data: {
			labels: inputLabels,
			datasets: [{
				label: 'Vending Machine 1',
				data: inputData,
				backgroundColor: backgroundColors,
				borderColor: borderColors,
				borderWidth: 1
			}]
		}
	});
}