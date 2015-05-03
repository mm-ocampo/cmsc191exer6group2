<div class="row">
	<div class="col-md-12">
			<div class="modal fade" id="editFruitModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="gridSystemModalLabel">Edit a fruit</h4>
			        </div>
			        <div class="modal-body">
			          <div class="container-fluid">


			          	<!-- THIS IS THE ADD A FRUIT FORM -->
			          	<form action="<?php echo base_url();?>index.php/home/edit_fruit" method="post" name="editFruitForm" id="editFruitForm">
							  <div class="form-group">
							    <label for="fruitName">Name</label>
							    <input type="text" class="form-control" id="fruitName" name="fruitName" placeholder="Enter fruit name" value"">
							  </div>
							  <div class="form-group">
							    <label for="quantity">Quantity</label>
							    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="">
							  </div>
							  <div class="form-group">
							    <label for="distibutor">Distributor</label>
							    <input type="text" class="form-control" id="distributor" name="distributor" placeholder="Distributor" value="">
							  </div>
							  <input type="hidden" id="_id" name="_id" value=""/>
							  <input type="hidden" id="_rev" name="_rev" value=""/>
						</form>
										            
			          </div>
			        </div>

			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary" form="editFruitForm">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->


	</div>
</div>