$(document).ready(function(){
	var base_url = window.location.href;
	console.log(base_url);


	$(".delete-button").click(function(){
		/*console.log('clicked with id : ' + $(this).attr("id"));
		 var jqxhr = $.post(base_url+"delete_fruit", {'_id' : $(this).attr("id"), '_rev' : $(this).attr("rev")}, function(data){})
        .done(function(data) {
            console.log(data);
        })*/
		var id = $(this).attr("id");
		var rev = $(this).attr("rev")
		var str_url = base_url + "delete_fruit";
		$.ajax({
		    url: str_url,
		    data: {'_id' : id, '_rev' : rev},
		    type: 'post',
		    success: function(return_val) {
		        console.log(return_val)
		    }
		 });
	});
});