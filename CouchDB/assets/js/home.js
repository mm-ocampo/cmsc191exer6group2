$(document).ready(function(){
	var base_url = window.location.href;
	console.log(base_url);

	$(".edit-button").click(function(){
		var id = $(this).attr("id");
		var rev = $("."+id).attr("rev");
		$("#editFruitForm #fruitName").attr("value", $("." + id + " .nameoffruit").text());
		$("#editFruitForm #quantity").attr("value", $("." + id + " .qtyoffruit").text());
		$("#editFruitForm #distributor").attr("value", $("." + id + " .distoffruit").text());
		$("#editFruitForm #_id").attr("value", id);
		$("#editFruitForm #_rev").attr("value", rev);
	
	});

	$(".delete-button").click(function(){
		var id = $(this).attr("id");
		var rev = $("."+id).attr("rev");
		$("#deleteFruitForm #_id").attr("value", id);
		$("#deleteFruitForm #_rev").attr("value", rev);
	});

	$(".edit-price-button").click(function(){
		var fruitId = $(this).attr("id");
		var fruitRev = $("."+fruitId).attr("rev");
		$("#editPriceForm #fruitId").attr("value", fruitId);
		$("#editPriceForm #fruitRev").attr("value", fruitRev);
	});

});