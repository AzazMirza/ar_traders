$(document).ready(function(){  
	// code to get all records from table via select box
	$("#fetch").change(function() {    
		var name = $(this).find(":selected").val();
		var dataString = 'name='+ name;    
		$.ajax({
			url: 'getData.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(Data) {
			   if(Data) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#name").text(Data.name);
					$("#age").text(Data.age);
					$("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});