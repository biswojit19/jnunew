$("#post").change(function()
{ 
	var post=$(this).val();
	$('#apply').empty();
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
	document.getElementById('apply').innerHTML = ""	

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



$("#advertisement").change(function()
{ 
	 var advertisement=$('#advertisement').val();
	var department=$('#department').find(":selected").text();
	var post=$('#post').find(":selected").text();
	var advertisement1=$('#advertisement').find(":selected").text();
	document.getElementById('notice').innerHTML = "<div class='col-lg-12' align='left'>You are applying for the " + post + " in " + department + " for the no " + advertisement1 + " <input onclick=\"showapply('yes')\" type='button' value='Yes ?' class='btn btn-warning' >&nbsp;<input onclick=\"showapply('no')\" type='button' value='No ?' class='btn btn-warning' ></div>";
	
	//alert(post + department + advertisement1);


	$.ajax
	({
		type: "GET",
		url: "/details",
		cache: false,
		data: {advertisement:advertisement},
		dataType: 'html',
		success: function(res)
		{  
			var json = $.parseJSON(res);
			for (var i=0;i<json.length;++i)
	        {
	            //$('#results').append('<div class="name">'+json[i].name+'</>');
	            document.getElementById('notice1').innerHTML = '<div class="col-md-6" align="justify"><strong>Essentials:</strong><p>' + json[i].description + '</p></div><div class="col-md-6" align="justify"><strong>Desirable:</strong><p>' + json[i].desirable + '</p></div>';
	            //alert(json[i].id);
	        }
			// $('#notice1').html(res);
			  
		} 
	});

});


function showapply(cod){
	
		if(cod=='yes'){
			document.getElementById('notice').innerHTML = "";
			document.getElementById('apply').innerHTML = "<button  id=\"savebutton\" type=\"submit\"  class=\"btn btn-warning btn-lg pull-right\">Apply</button>"	
		}
		if(cod=='no'){ 
			location.reload(); 
		}
	
}


 function netfunc(){
	 var k = $("#academic-net").val();
	 //alert(k);
           if(k == 4){
                $('#pns-net-subject').hide();
                $('#pns-net-certificate').hide();
                $('#pns-net-exe-block').show();
		   }else if(k == 5){
			   $('#pns-net-subject').hide();
                $('#pns-net-certificate').hide();
                $('#pns-net-exe-block').hide();
		   }else {
			    $('#pns-net-subject').show();
                $('#pns-net-certificate').show();
		   }
   
          
  }

  function percen_grade(){

	var pertype = document.getElementById("academic-pgperna").value;
	var per_grade = document.getElementById("academic-pgpercentage").value;
	
	if(pertype == 2 && per_grade > 10 ){
		alert("Overall Percentage/Final Grade Points Avg.(FGPA) Can't be greater than 10.");
		document.getElementById("academic-pgpercentage").value="";
	}	
}

$('#phdaward').datetimepicker({
            format: 'YYYY-MM-DD',
            showClear: true
        }); 