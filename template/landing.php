<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./src/bootstrap.min.css">
    <link rel="stylesheet" href="./src/styles.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/regular.css" integrity="sha384-seionXF7gEANg+LFxIOw3+igh1ZAWgHpNR8SvE64G/Zgmjd918dTL55e8hOy7P4T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/fontawesome.css" integrity="sha384-Lyz+8VfV0lv38W729WFAmn77iH5OSroyONnUva4+gYaQTic3iI2fnUKtDSpbVf0J" crossorigin="anonymous">
        <link rel="stylesheet" href="./src/flipclock.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./src/flexslider.css" type="text/css" media="screen" />

</head>

<body data-gr-c-s-loaded="true">
<div id="landing-page">
<section class="container main-content landing-content" >
    <div class="row">
        <div class="col-md-12">
               <h1 class="blue">Top Rated {{name}} for  <strong>ONLY {{market_place }} {{sale_price}}, Free Shipping!*</strong></h1>

            
            <div class="col-md-6 left">
                <div class="flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">

                            <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-714px, 0px, 0px);"><li :data-thumb="'../upload/'+cur_images[0].picture" class="clone" aria-hidden="true" style="width: 357px; margin-right: 0px; float: left; display: block;">
                                        <img :src="'../upload/'+cur_images[0].picture" alt="" draggable="false">
                                    </li>
                                      <li :data-thumb="'../upload/'+cur_images[1].picture" style="width: 357px; margin-right: 0px; float: left; display: block; margin-left: 10px;" class="" data-thumb-alt="">
                                        <img :src="'../upload/'+cur_images[1].picture" alt="" draggable="false">
                                    </li>
                                    <li :data-thumb="'../upload/'+cur_images[2].picture" data-thumb-alt="" class="flex-active-slide" style="width: 357px; margin-right: 10px; float: left; display: block;">
                                        <img :src="'../upload/'+cur_images[2].picture" alt="" draggable="false" >
                                    </li>
                                      <li :data-thumb="'../upload/'+cur_images[3].picture" data-thumb-alt="" class="flex-active-slide" style="width: 357px; margin-right: 10px; float: left; display: block;">
                                        <img :src="'../upload/'+cur_images[3].picture" alt="" draggable="false" >
                                    </li>

                                </ul>
                            </div>
                </div>
            </div>

                            <div class="col-md-6 right">
                    <h3>Normally {{market_place }}{{normal_price}},. <span class="blue">Your price: only {{market_place }}{{sale_price}}!</span> Only {{numbers_coupons_avi}} Available. This Offer Expires {{end_date}} (Pacific).</h3>

                    <p>Yes! You read correctly, because you saw this page, this top rated  {{name}} for only {{market_place }}{{sale_price}}, Free Shipping! from Amazon.com is only {{market_place }}{{sale_price}}  With Free Shipping*. This is available TODAY ONLY to promote this new Amazon launch. (*Free Shipping For Prime Members).</p>

                    <p>Guaranteed safe and secure checkout via Amazon.com. Click “Grab Coupon” below to get yours now!</p>

                    <p>* Free shipping is only available for Amazon Prime members.</p>

                  

                    <div class="col-md-6 price-holder">

                        <div class="price-label gray">This Offer</div>
                        <div class="price-amount"> {{market_place }}{{sale_price}}</div>
                    </div>


                    </div>
                
                    <div class="col-md-12 timer-holder">
                        <div id="countdown-div" class="countdown" >
                          
                         </div>
                           <h4 class="expiring">This deal expires on:<br>  {{end_date}} (Pacific)</h4>
                     </div>

                        <button class="submit-btn" v-on:click="grabCoupon">Grab Coupon</button>
              
                
                <div class="offer-counter">
                    <p>Only {{numbers_coupons_avi}} Still Left!</p>

                    <div class="meter">
                        <div class="filled" style="width: 63%;"></div>
                    </div>
                </div>
                    </div>


    </div>


</section>

<footer class="container site-footer">

    <div class="row">

        <div class="col-md-12">

            <small>© 2018. All Rights Reserved.<br>
              
            </small>
        </div>

    </div>

</footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="./src/bootstrap.min.js"></script>
<script src="./src/jquery.flexslider.js"></script>
<script src="./src/flipclock.js"></script>
<script src="./src/common.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>

<div id="script">
<!-- <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"d6e1a3eb8d290d847ad3d1b92","lid":"3e7b532511"}) })</script> -->
</div>



<script type="text/javascript">
    
   
   
 var app = new Vue({
  el: '#landing-page',
  data:{
    offer_title:"",
    id:getUrlParameter('offer_id'),
    name:"",
    status:"",
    template_id:-1,
    is_ever_green:"",
    start_date:"",
    end_date:"",
    daily_coupon_limited:0,
    market_place:"",
    sale_price:9999999,
    normal_price:999999,
    product_name:"",
    brand:"",
    email:"",
    is_signup:"",
    benefit1:"",
    landing_analytics_code:"",
    benefit2:"",
    thank_you_analytics_code:"",
    seller_id:"",
    product_asin:"",
    canonical_url:"",
    buy_link_keywords:"",
    url_rotation:"",
    is_super_nova_url:"",
    super_noval_url_keyword:"",
    club_name:"",
    deal_club_url:"",
    campaign_id:-1,
    aweber_id:"",
    search_key_words:"",
    add_to_wishlist:"",
    product_type:"",
    lead_sentence:"",
    product_description:"",
    freq_deal_description:"",
    freq_free_product_name:"",
    freq_free_product_value:"",
    freq_free_product_buy_url:"",
    freq_disc_description:"",
    freq_disc_product_name:"",
    freq_disc_product_value:"",
    freq_disc_product_discount:0,
    freq_disc_product_buy_url:"",
    is_upviral:"",
    upviral_code:"",
    template:[],
    campaign_id:"",
     token:"",
     user_id:-1,
     selected_template:"",
     cur_images:[{"picture":""},{"picture":""},{"picture":""},{"picture":""}],
     numbers_coupons_avi:0,
     is_redirect:"",
     redirect_url:""

    
  },
  created:function(){

  
             var formData = {
                  'token': "",
                  'offer_id':this.id,
                  'action': 'getImagesByOfferId'
                };
                // get images by offer id
                $.ajax({
                  url: '../php/index.php',
                  type: 'POST',
                  data: formData,
                  success: function (data, textStatus, jqXHR) {
                    if (data.code == 0) {
                        if(data.data !=""){
                            app.cur_images = data.data;
                        }
                    } else {
                      console.log('get images fails');
                    }
                    //app.initFlexslider();
                  },
                  error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.responseText)
                   }
                });


                // get offer info 
                var formData={
                    'id':this.id,
                    'action':'getOfferById'
                }
                $.ajax({
                  url : "../php/index.php",
                  type: "POST",
                  data : formData,
                  success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            data=data.data[0];

                            $("title").val(data.name)
                            console.log("get offer info");
                            app.name=data.product_name;
                            app.status=data.status;
                            app.template_id=data.template_id;
                            app.is_ever_green=data.is_ever_green;
                            app.start_date=data.start_date;
                            app.end_date=data.end_date;
                            app.daily_coupon_limited=data.daily_coupon_limited;
                            app.market_place= data.market_place === "us" ? "$":"£";
                            app.sale_price=data.sale_price;
                            app.normal_price=data.normal_price;
                            app.product_name=data.product_name;
                            app.brand=data.brand;
                            app.email=data.email;
                            app.is_signup=data.is_signup;
                            app.benefit1=data.benefit1;
                            app.landing_analytics_code=data.landing_analytics_code;
                            app.benefit2=data.benefit2;
                            app.thank_you_analytics_code=data.thank_you_analytics_code;
                            app.seller_id=data.seller_id;
                            app.product_asin=data.product_asin;
                            app.canonical_url=data.canonical_url;
                            app.buy_link_keywords=data.buy_link_keywords;
                            app.url_rotation=data.url_rotation;
                            app.is_super_nova_url=data.is_super_nova_url;
                            app.super_noval_url_keyword=data.super_noval_url_keyword;
                            app.club_name=data.club_name;
                            app.deal_club_url=data.deal_club_url;
                            app.campaign_id=data.campaign_id;
                            app.aweber_id=data.aweber_id;
                            app.search_key_words=data.search_key_words;
                            app.add_to_wishlist=data.add_to_wishlist;
                            app.product_type=data.product_type;
                            app.lead_sentence=data.lead_sentence;
                            app.product_description=data.product_description;
                            app.freq_deal_description=data.freq_deal_description;
                            app.freq_free_product_name=data.freq_free_product_name;
                            app.freq_free_product_value=data.freq_free_product_value;
                            app.freq_free_product_buy_url=data.freq_free_product_buy_url;
                            app.freq_disc_description=data.freq_disc_description;
                            app.freq_disc_product_name=data.freq_disc_product_name;
                            app.freq_disc_product_value=data.freq_disc_product_value;
                            app.freq_disc_product_discount=data.freq_disc_product_discount;
                            app.freq_disc_product_buy_url=data.freq_disc_product_buy_url;
                            app.is_upviral=data.is_upviral;
                            app.upviral_code=data.upviral_code;
                            app.user_id=data.user_id;
                            app.selected_template=data.template_id;
         
                            // change title 
                             if(app.status!="true"&&(typeof(getUrlParameter('isView'))=="undefined")){
                                app.goExpired("status!=true");
                            }
                            if(data.is_ever_green!="true"){
                                if(((new Date(app.end_date)-new Date())<0||app.status!="true")&&(typeof(getUrlParameter('isView'))=="undefined")){
                                        app.goExpired("time expired");
                                }
                            }
                            var diff = (new Date(app.end_date)-new Date())/1000;
                            if(data.is_ever_green=="true"){
                                 var d = new Date();
                                     d.setHours(23,59,59,59);
                                 diff = (d-new Date())/1000;
                            }
                            clock = $('#countdown-div').FlipClock(diff, {
                                    clockFace: 'HourlyCounter',
                                    countdown: true,
                                    autoStart: true,
                                    callbacks: {
                                        stop: function() {
                                             app.goExpired("time expired");
                                        }
                                }
                            });
                              
                            
                            
                            app.getAccountInfo(data.user_id);
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                    }
                 });

            $( document ).ajaxComplete(function() {
                app.$forceUpdate();
            });


  },
  updated:function (){
        this.initFlexslider()
  },
  methods:{

     getAccountInfo: function (uid) {
        var formData = {
          'user_id':uid,
          'action':'getUserById'
        }
        $.ajax({
          url : "../php/index.php",
          type: "POST",
          data : formData,
          success: function(data, textStatus, jqXHR) {
            if (data.code == 0) {
              app.email=data.data.ran_out_email;

            }else{
             console.log("No user found .");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText);
            console.log("get user fails .");
          }
        });
      },
    getCoupon:function(){
        var data_offer = {
                    'offer_id': getUrlParameter('offer_id'),
                    'action': 'getAvailableCouponsByOfferId'
                };
                      // get coupons by offer id
                $.ajax({
                    url: '../php/index.php',
                    type: 'POST',
                    data: data_offer,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            if(data.data.length>0){
                                   app.numbers_coupons_avi = data.data.length
                                }else{
                                    app.goExpired("no coupon")
                                }
                         
                        } else {
                           console.log(data.message);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                         app.goExpired("no coupon")
                       
                    }
                });

                if(app.daily_coupon_limited!=-1){
                    // by default daily_coupon_limited is -1,then find the  used coupon
                         var data_offer = {
                                'offer_id': getUrlParameter('offer_id'),
                                'action': 'getUsedCoupon'
                            };
                                  // get coupons by offer id
                            $.ajax({
                                url: '../php/index.php',
                                type: 'POST',
                                data: data_offer,
                                success: function (data, textStatus, jqXHR) {
                                    if (data.code == 0) {
                                        if(data.data.length>0){
                                               var todayUsedCoupon = 0;
                                               for(var i in data.data){
                                                    var d = new Date();
                                                    d.setHours(0,0,0,0);
                                                    // get today to midnight data time, compare with used the coupon timestamp. 
                                                    // if there are less then daily coupon limited coupon used then, goes fine
                                                    // otherwise go expired()
                                                 if((new Date(data.data[i].timestamp)-d)>0){
                                                    todayUsedCoupon=todayUsedCoupon+1
                                                    if(todayUsedCoupon==app.daily_coupon_limited){
                                                        app.goExpired("out of daily limited ")
                                                    }
                                                 }
                                               }    
                                            }else{
                                                app.goExpired("out of daily limited ")
                                            }
                                     
                                    } else {
                                       console.log(data.message);
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    console.log(jqXHR.responseText)
                                     app.goExpired("error")
                                   
                                }
                            });

                }
            },
    initFlexslider:function(){
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
          });
    },
    goAmazon: function(){
        //href="https://amazon.com/s?marketplaceID=ATVPDKIKX0DER&amp;me=A1A4U1WT1WWZ8Z&amp;merchant=A1A4U1WT1WWZ8Z&amp;keywords=patella+brace+large"

        //var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+"&keywords=patella+support+xl"
        //var url = "https://www.amazon.com/"+this.keywords+"/dp/"+this.product_asin+"/ref=sr_1_1?ie=UTF8&qid=1517500632&m="+this.seller_id+"&sr=8-1&keywords="+this.keywords;

        var noval_keywords=this.super_noval_url_keyword.split("\n")
        var normal_keywords=this.buy_link_keywords.split("\n")

        var size=noval_keywords.length;
        var index = Math.round(Math.random() * (size-1));
        var noval_keyword= noval_keywords[index];


        size=normal_keywords.length;
        index = Math.round(Math.random() * (size-1));
        var normal_keyword= normal_keywords[index];
        
        if(this.canonical_url ==""){
            if(this.is_super_nova_url){
                  var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+"&keywords="+noval_keyword
                  location.href =url
            }else{
                  var url = "https://www.amazon.com/"+normal_keyword+"/dp/"+this.product_asin+"/m="+this.seller_id+"&keywords="+this.keywords;
                  location.href =url
            }

        }else{
            location.href =this.canonical_url
        }
        
       
    },
    grabCoupon: function(){
        location.href = "./give_away_buy_now.php?cid="+getUrlParameter('cid')+"&offer_id="+getUrlParameter('offer_id');
        
    },
    goExpired:function(){
                            if(this.is_redirect){
                                location.href =data.redirect_url;
                            }else{
                                 location.href = "./expired.php?cid="+getUrlParameter('cid')+"&offer_id="+getUrlParameter('offer_id');
                            }

    }

}

})

</script>



</body></html>