

describe('test campaigns.js', () => {
    it('init vue : test token', () => {
       expect(app.token).toEqual("sfasdfsadf12312"); 
    })

    it('method deleteCampaign', () => {
    	var length  = app.campaigns.length;
    	spyOn($, "ajax");
    	$( document ).ajaxComplete(function() {
		  app.deleteCampaign(15)

		  $( document ).ajaxComplete(function() {
		  	console.log(app.campaigns)
	    	//expect($.ajax.mostRecentCall.0]["url"]).toEqual("/products/123");
	    	var status  = "undefined";
	    	for(var i in app.campaigns){
	    		if(app.compaigns[i].id=="15"){
	    			status = app.compaigns[i].satus
	    		}
	    	}
	        expect(status).toEqual("deleted"); 
		  })
		  	
		});
  
    
    })

})