

  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};





if(!getUrlParameter("token")){
  window.location.href = "login.php?status=false"
  }else{
        // check token

         var formData={
                'token':getUrlParameter("token"),
                'action':'getUserByToken'
            }

           window.ajax_getUserByToken=$.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                    console.log(data);
                    if(data.code ==0 ){
                        // set user name in header
                        $("#header_user_name").html(data.data.username); 
                        //set user id as window's attribute
                        window.campaign_user_id = data.data.id;
                        // init nav bar links 
                        $("#campaign_link").attr("href","campaigns.php?token="+getUrlParameter("token")+"&uid="+data.data.id); 
                        $("#home_link").attr("href","campaigns.php?token="+getUrlParameter("token")+"&uid="+data.data.id); 

                    }else{
                         // has invalid token
                         window.location.href = "login.php?status=false"
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("username or password is incorrect .","warn");
                   window.location.href = "login.php?status=false"
                }
             });

}

