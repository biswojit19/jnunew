$("#post").change(function()
{ 
	var post=$(this).val();
	$.ajax
	({
		type: "GET",
		url: "/department",
		cache: false,
		success: function(data)
		{//alert(data);
			 $('#department').html(data.html);
		} 
	});

});


$("#department").change(function()
{ 
	var department=$('#department').val();
	var post=$('#post').val();

	//alert(post);
	$.ajax
	({
		type: "GET",
		url: "/advertisement",
		cache: false,
		data: {post:post,department:department},
		success: function(res)
		{ //alert(res);
			 $('#advertisement').html(res.html);
		} 
	});

});