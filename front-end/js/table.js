function addRow() {
    var table = document.getElementById('table').getElementsByTagName('tbody')[0];

	// Insert a row in the table at the last row
	var newRow = table.insertRow(table.rows.length);

	var newRowHTML = '<th scope="row">' + table.rows.length + '</th>\
		<td><input type="text" name="productName' + table.rows.length + '"></td>\
		<td><input type="text" name="location' + table.rows.length + '"></td>\
		<td><input type="text" name="price' + table.rows.length + '"></td>\
		<td style="text-align: center;">\
			<button type="button" class="btn btn-outline-primary" onclick="saveRow(this)">&nbsp;Save</button>\
			<button type="button" class="btn btn-outline-primary" onclick="deleteRow(this)">&nbsp;Cancel</button>\
		</td>';
							
	newRow.innerHTML = newRowHTML;
}
						
function deleteRow(btn) {
	//remove the row
	var removedRow = btn.parentNode.parentNode;
	removedRow.parentNode.removeChild(removedRow);

    //reset indexes for each remaining row
    var table = document.getElementById("table").getElementsByTagName('tbody')[0];
    for (var i = 0, row; i<table.rows.length; i++) {
        row = table.rows[i];
		row.cells[0].innerHTML = i + 1;
	}

    //remove the row from the database
    //coming soon
}

function saveRow(btn) {
    var savedRow = btn.parentNode.parentNode;

    //swap each text box with plain text of its value
    for (var i=1; i<4; i++) {
		var val = savedRow.cells[i].children[0].value;
		savedRow.cells[i].innerHTML = val;
    }

    //swap the save button for a delete button
    savedRow.cells[4].innerHTML = '<button type="button" class="btn btn-outline-danger" onclick="deleteRow(this)"><i class="fas fa-trash"></i>&nbsp;Delete</button>';
    
	//save the new row to the database
    //coming soon
}