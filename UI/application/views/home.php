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
				  	<tr>
						<td class="th" rowspan="2">Name</td>
						<td class="th" rowspan="2">Quantity</td>
						<td class="th" rowspan="2">Distributor</td>
						<td class="th" rowspan="2">Price</td>
						<td class="th" colspan="3">Action</td>
					</tr>
					<tr>
						<td class="subTh">Edit Fruit</td>
						<td class="subTh">Edit Price</td>
						<td class="subTh">Delete Fruit</td>
					</tr>
					<tr>
						<td>Mango</td>
						<td>...</td>
						<td>...</td>
						<td>...</td> 
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editPriceModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteFruitModal"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
					</tr>

					<tr>
						<td>Apple</td>
						<td>...</td>
						<td>...</td>
						<td>...</td> 
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editPriceModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteFruitModal"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
					</tr>

					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td> 
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editPriceModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteFruitModal"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
					</tr>

					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td> 
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editFruitModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editPriceModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
						<td><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteFruitModal"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
					</tr>

					<!-- THIS IS THE ADD BUTTON (PLUS SIGN) -->
					<tr>
						<td colspan="6"></td>
						<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addFruitModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></td>
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

</body>
</html>