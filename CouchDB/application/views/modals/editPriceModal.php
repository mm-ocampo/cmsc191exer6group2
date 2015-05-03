<div class="row">
	<div class="col-md-12">
	<div class="modal fade" id="editPriceModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <h4 class="modal-title" id="gridSystemModalLabel">Edit Price</h4>
	        </div>
	        <div class="modal-body">
	          <div class="container-fluid">

	          	<!-- THIS IS THE ADD A FRUIT FORM -->
	          	<form action="<?php echo base_url();?>index.php/home/edit_price" method="post" name="editPriceForm" id="editPriceForm">
					  <div class="form-group">
					  	<h3 id="editpricefruitname"></h3>
					  	<h3 id="oldprice"></h3>
					    <label for="price">Price</label>
					    <input type="text" class="form-control" id="price" placeholder="Enter New Price">
					  </div>
				</form>
								            
	          </div>
	        </div>

	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          <button type="submit" class="btn btn-primary" form="editPriceForm">Save changes</button>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	</div>
</div>