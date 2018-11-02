var labels = ["Kitkat", "Starbucks coffee", "Cute cookie", "Sandwich", "Pizza"];
var data = [12, 19, 3, 5, 2];
var color = ['255, 99, 132'];

addChart("radarChart1", labels, data, color);

function addChart(targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var borderColors = [];
	var backgroundColors = [];
	
	for (var i=0; i<backgroundColorsIn.length; i++) {
		backgroundColors.push("rgba(" + backgroundColorsIn[i] + ", 0.2)");
		borderColors.push("rgba(" + backgroundColorsIn[i] + ", 1.0)");
	}

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