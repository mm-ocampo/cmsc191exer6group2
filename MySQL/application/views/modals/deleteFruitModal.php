<div class="row">
	<div class="col-md-12">
			<div class="modal fade" id="deleteFruitModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="gridSystemModalLabel">Delete fruit</h4>
			        </div>
			        <div class="modal-body">
			          <div class="container-fluid">


			          	<h5>Are you sure you want to delete this fruit?</h3>
			          	<!-- THIS IS THE DELETE A FRUIT FORM -->
			          	<form action="<?php echo base_url();?>index.php/main/delete_fruit" method="post" name="deleteFruitForm" id="deleteFruitForm">
							<input type="hidden" id="_id" name="_id" value=""/>
						</form>
										            
			          </div>
			        </div>

			        <div class="modal-footer">
			          <button type="submit" class="btn btn-default modalButton" form="deleteFruitForm">Yes</button>
			           <button type="button" class="btn btn-default modalButton" data-dismiss="modal">No</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
	</div>
</div>