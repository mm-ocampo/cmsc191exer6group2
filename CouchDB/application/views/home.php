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
			  	<tr>
					<td>Name</td>
					<td>Quantity</td>
					<td>Distributor</td>
					<td>Price</td>
					<td colspan="2">Action</td>
				</tr>

				<tr>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td> 
					<td><a href="" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
				</tr>

				<tr>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td><a href="" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
				</tr>

				<tr>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td><a href="" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
				</tr>

				<tr>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td><a href="" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td><a href="" data-toggle="modal" data-target="#deleteFruitModal"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a></td>
				</tr>

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