<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Panel</title>
    <meta name="description" content="">

   <?php include "css.php" ;?>

    </head>
<body data-gr-c-s-loaded="true">


<?php include "header.php" ;?>

<div class="container" id="offer-list">

    <h1>{{offer_list_title}}</h1>
    <h2>Offers</h2>


    <span style="float: right;"><a v-on:click="add_new_offer">Add New Offer</a></span>
    <table id="products-table" class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Enabled?</th>
            <th>Type</th>
            <th>Avail Now?</th>
            <th>Coupons<br>Available/Used/Total</th>
            <th>Daily Limit<br>Max/Today</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
                    <tr v-for="(offer, index) in offers " v-if="offer.status!='deleted'">
                <td>{{offer.id}}</td>
                <td>{{offer.name}}</td>
                <td><span style="color: green;">{{offer.status}}</span></td>
                <td>{{offer.product_type}}</td>
                <td>
                    <span style="color: red; font-weight: bold;"> {{offer.is_avail}} </span>
                    
                </td>
                <td>
                    {{offer.active_coupons}}/{{offer.used_coupons}}  / {{offer.total_coupons}}               </td>
                <td>{{offer.daily_coupon_limited}}</td>
                <td><a  href="javascript:void 0" v-on:click="edit(offer.id)" >edit</a></td>
                <td><a href="javascript:void 0" v-on:click="duplicate(offer.id)" >duplicate</a></td>
                <td><a href="javascript:void 0" v-on:click="goToCoupon(offer.id)" >coupons</a></td>
                <td><a href="javascript:void 0" v-on:click="images(index, offer)" >images</a></td>
                <td><a href="javascript:void 0" v-on:click="del(offer.id)" >Delete</a></td>
            </tr>
                </tbody>
    </table>


<footer class="footer">
    <p>©2018 | Server Time: 2018-02-23 06:15:20</p>
</footer>

</div><!-- /.container -->

<?php include "js.php" ;?>

<script type="text/javascript">
    
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
              url : "php/index.php",
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
              url : "php/index.php",
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
                    url: 'php/index.php',
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
                  url : "php/index.php",
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
                  url : "php/index.php",
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






</script>


</body></html>