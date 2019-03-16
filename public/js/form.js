$("#post").change(function()
{ 
	var post=$(this).val();
	alert(post);
	// $.ajax
	// ({
	// type: "GET",
	// url: "{{url('/users/abc')}}",
	// data: dataString,
	// cache: false,
	// success: function(data)
	// {
	//   console.log("3:"+data);
	// } 
	// });

});