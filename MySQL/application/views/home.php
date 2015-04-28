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
			<table class="table table table-striped table-bordered">

				<?php
					if(empty($fruits)){
						echo  '<h5>Fruit record is empty.</h5>';
					}else{ 
						echo "<tr>";
						echo "<td>Name</td>";
						echo "<td>Quantity</td>";
						echo "<td>Distributor</td>";
						echo "<td>Price</td>";
						echo "<td colspan='2'>Action</td>";
						echo "</tr>";

					    foreach($fruits as $item){
					    	echo "<tr>";
					    	echo "<td>". $item['name'] ."</td>";
					    	echo "<td>". $item['qty'] ."</td>";
					    	echo "<td>". $item['dist'] ."</td>";
					    	echo "<td>". $item['qty'] ."</td>";
							echo "<td><a href='' data-toggle='modal' data-target='#editFruitModal'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a></td>";
							echo "<td><a href=''><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
							echo "</tr>";
					    }
					}
				?>

				

				<!-- THIS IS THE ADD BUTTON (PLUS SIGN) -->
				<tr>
					<td colspan="5"></td>
					<td><a href="" data-toggle="modal" data-target="#addFruitModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
				</tr>

			  </table>
		</div> <!-- div class="col-md-8 col-md-offset-2 text-center" -->
	</div> <!-- row tableRow-->

</body>
</html>