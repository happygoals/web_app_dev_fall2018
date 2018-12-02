function addRow() {
    var table = document.getElementById('table').getElementsByTagName('tbody')[0];

	//Insert a row in the table at the last row
	var newRow = table.insertRow(table.rows.length);

	var newRowHTML = '<th scope="row">' + table.rows.length + '</th>\
		<td><input type="text" name="productName' + table.rows.length + '"></td>\
		<td><input type="text" name="location' + table.rows.length + '"></td>\
		<td><input type="text" name="price' + table.rows.length + '"></td>\
		<td style="text-align: center;">\
			<button type="button" class="btn btn-outline-primary" onclick="saveRow(this)">&nbsp;Save</button>\
			<button type="button" class="btn btn-outline-primary" onclick="cancelRow(this)">&nbsp;Cancel</button>\
		</td>';
							
	newRow.innerHTML = newRowHTML;
}

function cancelRow(btn) {
    var removedRow = btn.parentNode.parentNode;
    removedRow.parentNode.removeChild(removedRow);
    
    //reset indexes for each remaining row
    var table = document.getElementById("table").getElementsByTagName('tbody')[0];
    for (var i = 0, row; i<table.rows.length; i++) {
        row = table.rows[i];
	    row.cells[0].innerHTML = i + 1;
	}
}
						
function deleteRow(btn) {
    var confirmed = confirm("This will delete the row from the DB and cannot be undone. Are you sure?");
    
    if (confirmed == true) {
        //remove the row
    	var removedRow = btn.parentNode.parentNode;
    	var removedName = removedRow.cells[1].innerHTML;
	    removedRow.parentNode.removeChild(removedRow);

        //reset indexes for each remaining row
        var table = document.getElementById("table").getElementsByTagName('tbody')[0];
        for (var i = 0, row; i<table.rows.length; i++) {
            row = table.rows[i];
		    row.cells[0].innerHTML = i + 1;
	    }
	    
	    //delete from db
	    deleteFromDB(removedName);
    }
}

function addToDB(row) {
    $.ajax({
        type: "POST",
        url: "insertProduct.php",
        data: {productName:row[0], productLocation:row[1], productPrice:row[2]},
        dataType: "JSON",
        success: function(data) {
        },
        error: function(err) {
        }
	});
}

function deleteFromDB(name) {
    $.ajax({
        type: "POST",
        url: "deleteProduct.php",
        data: {productName:name},
        dataType: "JSON",
        success: function(data) {
        },
        error: function(err) {
        }
	});
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
    addToDB([savedRow.cells[1].innerHTML, savedRow.cells[2].innerHTML, savedRow.cells[3].innerHTML]);
}