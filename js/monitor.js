

function addToMonitor(page,fun,pos,data,testcase){

	if(typeof(window.testcase)!="undefined"){
		   var formData={
		         	'testcase':testcase,
		         	'pos':pos,
		         	'data':JSON.stringify(data),
		         	'function':fun,
	                'page':page,
	                'action':'monitor'
	            }
	          $.ajax({
	              url : "/coupon2/php/index.php",
	              type: "POST",
	              data : formData,
	           	 success: function(data, textStatus, jqXHR)
	                {
	                    
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                   console.log(jqXHR.responseText)
	                 
	                }
	             });
	}
	      
}