<?php
function productRow($rowNum, $name, $vmNum, $price, $adminPriv) { ?>
    <tr>
	    <th scope="row"><?php echo $rowNum;?></th>
		<td><?php echo $name;?></td>
		<td>Vending machine <?php echo $vmNum;?></td>
		<td><?php echo money_format('$%i', $price);?></td>
		<?php if ($adminPriv == true) { ?>
			<td style="text-align:center;">
		    	<button type="button" class="btn btn-outline-primary" value='dddRow'><i class="fas fa-plus"></i>&nbsp;Add</button> 
			    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button> 
			</td>
		<?php } ?>
	</tr>
<?php   
}
?>