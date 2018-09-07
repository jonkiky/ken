
 var app = new Vue({
  el: '#offer-list',
  data:{
    offer_list_title:"",
    token:"",
    offers:[]
  },
  created:function(){
    this.token  = getUrlParameter("token");
    if(getUrlParameter("token")&&getUrlParameter("cid")){
        //  get campaign by id
        var formData={
                'id':getUrlParameter("cid"),
                'token':getUrlParameter("token"),
                'action':'getCampaignById'
            }
            $.ajax({
              url : "../php/index.php",
              type: "POST",
              data : formData,
              success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        app.offer_list_title = data.data[0].name;
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

        //  get offer by campaign id

        var formData={
                'id':getUrlParameter("cid"),
                'token':getUrlParameter("token"),
                'action':'getOfferByCampaignId'
            }
            $.ajax({
              url : "../php/index.php",
              type: "POST",
              data : formData,
              success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        for(var i in data.data){
                           var current = new Date();
                            var start=new Date(data.data[i].start_date);
                            var end=new Date(data.data[i].end_date);
                            if(data.data[i].status === "true" && (current>start&&current<end)){
                               data.data[i].is_avail="YES"
                            }else{
                               data.data[i].is_avail="NO"
                            }

                            // calculate is available or not 

                            app.findCouponByOfferId(data.data[i],function(offer){
                              app.offers.push(offer);
                            })

                           
                        }
                    }else{
                        $.notify("No offer found .","warn");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("get offers fails .","warn");
                }
             });



     }else{
         $.notify("invaild url .","warn");
         //setTimeout(location.reload(),10000)

     }
        
    },
    methods:{
        findCouponByOfferId:function(offer,callback){
              var data_offer = {
                    'token': this.token,
                    'offer_id': offer.id,
                    'action': 'getCouponsByOfferId'
                };
                 // get coupons by offer id
                $.ajax({
                    url: '../php/index.php',
                    type: 'POST',
                    data: data_offer,
                    success: function (data, textStatus, jqXHR) {
                        active_coupons=used_coupons=0;
                        if (data.code == 0) {
                           for (var i in data.data) {
                                if (data.data[i].status === 'used') {
                                    
                                    ++used_coupons;
                                } else {
                                    ++active_coupons;
                                }
                                                    
                            }
                        }
                        offer.total_coupons = used_coupons+active_coupons;
                        offer.used_coupons =used_coupons;
                                offer.active_coupons =active_coupons;
                        callback(offer);
                    },

                });

        },
        add_new_offer:function(){
             window.location.href = "offer-edit.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid");
        },
        edit:function(id){
             window.location.href = "offer-edit.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid")+"&id="+id;
    
        },
        images:function(index, item){
          window.sessionStorage.setItem('offer_name', item.name);
          window.location.href = "image.php?token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + item.id;
        },
        duplicate:function(id){
            // update campaign status to deleted
                var formData={
                    'id':id,
                    'user_id':getUrlParameter("uid"),
                    'token':getUrlParameter("token"),
                    'action':'duplicateOffer'
                }

                $.ajax({
                  url : "../php/index.php",
                  type: "POST",
                  data : formData,
                success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            $.notify("duplicateOffer offer success .","success");
                            setTimeout(location.reload(),10000)
                            
                        }else{
                            $.notify("duplicateOffer offer fails .","warn");
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                       $.notify("duplicateOffer offer fails .","warn");
                    }
                 });
        },
        goToCoupon:function(id){
            window.location.href = "coupons-edit.php?token="+app.token+"&uid="+getUrlParameter("uid")+"&offer_id="+id+"&cid="+getUrlParameter("cid");
  
        },
        del:function(id){
             console.log("delete offer");
                // update campaign status to deleted
                var formData={
                    'status':'deleted',
                    'id':id,
                    'user_id':getUrlParameter("uid"),
                    'token':getUrlParameter("token"),
                    'action':'updateOfferStatus'
                }

                $.ajax({
                  url : "../php/index.php",
                  type: "POST",
                  data : formData,
                success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            $.notify("delete offer success .","success");
                            setTimeout(location.reload(),10000)
                            
                        }else{
                            $.notify("delete offer fails .","warn");
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                       $.notify("delete offer fails .","warn");
                    }
                 });

        }
    }
})


