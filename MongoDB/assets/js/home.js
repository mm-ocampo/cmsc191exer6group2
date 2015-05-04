$(document).ready(function(){
	var base_url = window.location.href;
	console.log(base_url);

	$(".edit-button").click(function(){
		var id = $(this).attr("id");
		console.log(id);
		//var rev = $("."+id).attr("rev");
		$("#editFruitForm #fruitName").attr("value", $("#"+id+"name").text());
		$("#editFruitForm #quantity").attr("value", $("#"+id+"qty").text());
		$("#editFruitForm #distributor").attr("value", $("#"+id+"dist").text());
		$("#editFruitForm #idContainer").attr("value", id);
		//$("#editFruitForm #price").attr("value", $("." + id + " .priceoffruit").text());
		$("#editFruitForm #_id").attr("value", id);
		//$("#editFruitForm #_rev").attr("value", rev);
	
	});

	$(".delete-button").click(function(){
		var id = $(this).attr("id");
		var rev = $("."+id).attr("rev");
		$("#deleteFruitForm #_id").attr("value", id);
		$("#deleteFruitForm #_rev").attr("value", rev);
	});

	$(".edit-price-button").click(function(){
		var id = $(this).attr("id");
		$("#editFruitForm #idContainer1").attr("value", id);
	});
});