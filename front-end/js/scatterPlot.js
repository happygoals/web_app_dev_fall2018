var data = [{x:0, y:12}, {x:1, y:19}, {x:2, y:3}, {x:3, y:5}, {x:4, y:2}, {x: 5, y:3}];
var color = ['255, 99, 132', '54, 162, 235', '255, 206, 86', '75, 192, 192', '153, 102, 255', '255, 159, 64'];

addScatterPlot("scatterPlot1", labels, data, color);

function addScatterPlot(targetID, inputLabels, inputData, backgroundColorsIn) {
	var ctx = document.getElementById(targetID).getContext('2d');
	var colors = [];
	
	for (var i=0; i<backgroundColorsIn.length; i++) {
		colors.push("rgba(" + backgroundColorsIn[i] + ", 1.0)");
	}

	var scatterChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            data: inputData,
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
}