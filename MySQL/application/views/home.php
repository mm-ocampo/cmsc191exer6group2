<body>

	<div class="row titleRow text-right">
		<div class="col-md-12">
			<h1 class="title">Fruits Digest</h1>
		</div>
	</div>

	<!-- THIS IS THE TABLE OF FRUITS -->
	<div class="row tableRow">
		<div class="col-md-12 text-center">
			<div class="tableDiv">
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
					    	// echo "<tr class ='". $item['id'] ."' rev='". $item['rev'] ."'>";
					    	echo "<td class='nameoffruit'>" . $item['name'] . "</td>";
					    	echo "<td class='qtyoffruit'>". $item['qty'] ."</td>";
					    	echo "<td class='distoffruit'>". $item['dist'] ."</td>";
					    	echo "<td class='priceoffruit'>". $prices[$item['name']] ."</td>";
							echo "<td><button type='button' class='btn btn-success edit-button' id='" . $item['id'] ."' data-toggle='modal' data-target='#editFruitModal'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></td>";
							echo "<td><button type='button' class='btn btn-info edit-price-button' id='" . $item['id'] ."' data-toggle='modal' data-target='#editPriceModal'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></td>";
							echo "<td><button type='button' class='btn btn-danger delete-button' data-toggle='modal' data-target='#deleteFruitModal' id='". $item['id'] ."'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></td>";
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
			</div>
		</div> <!-- div class="col-md-8 col-md-offset-2 text-center" -->
	</div> <!-- row tableRow-->

	<div class="row footer text-right">
		<div class="col-md-12">
			<span>Visit us on 
				<a target="_blank" href="https://github.com/mm-ocampo/cmsc191exer6group2">
					<span class="gitIcon">
						<i class="fa fa-github fa-lg"></i>
					</span>
				</a>
			</span>
			<span class="copyright"><i class="fa fa-copyright"></i>Fruits Digest 2015</span>
		</div>
	</div>

	<script src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/home.js"></script>
</body>
</html>