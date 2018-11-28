<?php
function listbox($background, $title, $list) { ?>
	<div class="card text-white text-center bg-light mb-5" style=" width: 380px; height: 150px; background-color: <?php echo $background ?>; margin: 5px auto;">
		<div class="card-header" style="background-color:<?php echo $background ?>;">
			<h5><?php echo $title ?></h5>
		</div>
		<div class="card-body" style="background-color:<?php echo $background ?>;">
			<ol style="text-align:left;">
				<?php
					//generate list from array
					foreach ($list as $listItem) {
						echo "<li>".$listItem."</li>\n";
					}
				?>
			</ol>
		</div>
	</div>
<?php } ?>

<?php
function simpleBox($background, $icon, $title, $value) { ?>
	<div class="card text-white bg-light text-center mb-5" style="min-width: 11rem; max-width: 20rem; margin: 0px auto;">
		<div class="card-header" style="background-color:<?php echo $background ?>;">
			<h6><?php echo $title ?></h6>
		</div>
		<div class="card-body" style="background-color:<?php echo $background ?>;">
			<h3><i class="<?php echo $icon ?>"></i> <?php echo $value ?></h3>
		</div>
	</div>
<?php } ?>

<?php
function productRow($rowNum, $name, $vmNum, $price, $adminPriv) { ?>
    <tr>
	    <th scope="row"><?php echo $rowNum;?></th>
		<td><?php echo $name;?></td>
		<td>Vending machine <?php echo $vmNum;?></td>
		<td><?php echo money_format('$%i', $price);?></td>
		<td style="text-align: center;">
			<?php if ($adminPriv == true) { ?>
		    	<button type="button" class="btn btn-outline-primary" value='dddRow'><i class="fas fa-plus"></i>&nbsp;Add</button> 
			    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button>
			<?php } ?>
		</td>
	</tr>
<?php   
}
?>