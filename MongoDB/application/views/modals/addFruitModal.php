<div class="row">
	<div class="col-md-12">

			<div class="modal fade" id="addFruitModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="gridSystemModalLabel">Add a fruit</h4>
			        </div>
			        <div class="modal-body">
			          <div class="container-fluid">


			          	<!-- THIS IS THE ADD A FRUIT FORM -->
			          	<form action="<?php echo base_url();?>index.php/main/addFruit" method="get" name="addFruitForm" id="addFruitForm">
							  <div class="form-group">
							    <label for="fruitName">Name</label>
							    <input type="text" name = "fruitName" class="form-control" id="fruitName" placeholder="Enter fruit name">
							  </div>
							  <div class="form-group">
							    <label for="quantity">Quantity</label>
							    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
							  </div>
							  <div class="form-group">
							    <label for="distibutor">Distributor</label>
							    <input type="text" name="distributor" class="form-control" id="distributor" placeholder="Distributor">
							  </div>
							  <div class="form-group">
							    <label for="price">Price</label>
							    <input type="text" name="price" class="form-control" id="price" placeholder="Quantity">
							  </div>
						</form>
										            
			          </div>
			        </div>

			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary" form="addFruitForm">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->


	</div>
</div>