<body>

	<div class="row">
		<div class="col-md-12 topLine"></div>
	</div>

	<div class="row">
		<div class="col-md-2 col-md-offset-5 text-center">
			<img class="img-circle horse" src= "<?php echo base_url(); ?>assets/img/horse.jpg" />
			<h1 class="engineName">Fruit Engine</h1>
		</div>
	</div>

	<!-- THIS IS THE TABLE OF FRUITS -->
	<div class="row tableRow">
		<div class="col-md-8 col-md-offset-2 text-center">
			<table class="table table-bordered">
			  	<?php
					if(empty($fruits)){
						echo  '<h5>Fruit record is empty.</h5>';
					}else{ 
						echo "<tr>";
						echo "<td class='th' rowspan='2'>Name</td>";
						echo "<td class='th' rowspan='2'>Quantity</td>";
						echo "<td class='th' rowspan='2'>Distributor</td>";
						echo "<td class='th' rowspan='2'>Price</td>";
						echo "<td colspan='3'>Action</td>";
						echo "</tr>";
						echo "<tr>";
						echo"<td class='subTh'>Edit Fruit</td>";
						echo "<td class='subTh'>Edit Price</td>";
						echo "<td class='subTh'>Delete Fruit</td>";
 						echo "</tr>";

					    foreach($fruits as $item){
					    	echo "<tr>";
					    	echo "<td>". $item['name'] ."</td>";
					    	echo "<td>". $item['qty'] ."</td>";
					    	echo "<td>". $item['dist'] ."</td>";
					    	echo "<td>". $prices[$item['name']] ."</td>";
							echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#editFruitModal'><span class='glyphicon glyphicon-edit' aria-hidden='true' id='" . $item['id'] ."'></span></button></td>";
							echo "<td><button type='button' class='btn btn-info' data-toggle='modal' data-target='#editPriceModal'><span class='glyphicon glyphicon-edit' aria-hidden='true' id='" . $item['id'] ."'></span></button></td>";
							echo "<td><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true' id='". $item['id'] ."' rev='". $item['id'] ."'></span></button></td>";
							echo "</tr>";
					    }
					}
				?>
				<!-- THIS IS THE ADD BUTTON (PLUS SIGN) -->
				<tr>
					<td colspan="6"></td>
					<td><a href="" data-toggle="modal" data-target="#addFruitModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
				</tr>

			  </table>
		</div> <!-- div class="col-md-8 col-md-offset-2 text-center" -->
	</div> <!-- row tableRow-->
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/home.js"></script>
</body>
</html>