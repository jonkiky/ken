 var app = new Vue({
  el: '#campaign-list',
  data:{
    token:"",
    campaigns:[]
  },
  created:function(){
    
    this.token  = getUrlParameter("token");

        var formData={
                'user_id':getUrlParameter("uid"),
                'token':getUrlParameter("token"),
                'action':'getCampaignByUserId'
            }

            $.ajax({
              url : "../php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        for(var i in data.data){
                            app.campaigns.push(data.data[i]);
                        }
                    }else{
                        $.notify("No campaigns found .","warn");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("get campaigns fails .","warn");
                }
             });

  },
  methods:{
        deleteCampaign:function(item){
                console.log(1);
                // update campaign status to deleted
                var formData={
                    'status':'deleted',
                    'id':item,
                    'user_id':getUrlParameter("uid"),
                    'token':getUrlParameter("token"),
                    'action':'updateCampaignStatus'
                }

                $.ajax({
                  url : "../php/index.php",
                  type: "POST",
                  data : formData,
                success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            $.notify("delete campaigns success .","success");
                            setTimeout(location.reload(),10000)
                            
                        }else{
                            $.notify("delete campaigns fails .","warn");
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                       $.notify("delete campaigns fails .","warn");
                    }
                 });
        },
        edit:function(item){
              window.location.href = "campaign-edit.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&id="+item;
        },
        duplicate:function(item){
             var formData={
                    'id':item,
                    'user_id':getUrlParameter("uid"),
                    'token':getUrlParameter("token"),
                    'action':'duplicateCampaign'
                }

                $.ajax({
                  url : "php/index.php",
                  type: "POST",
                  data : formData,
                success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            $.notify("duplicate campaigns success .","success");
                            setTimeout(location.reload(),10000)
                            
                        }else{
                            $.notify("delete campaigns fails .","warn");
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                       $.notify("duplicate campaigns fails .","warn");
                    }
                 });

            
        },
        offers:function(item){
            window.location.href = "offers.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&cid="+item;
        },
        addCampaign:function(){
            window.location.href = "campaign-edit.php?token="+this.token+"&uid="+getUrlParameter("uid");
        }
  }

})

