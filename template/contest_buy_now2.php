<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com fa-events-icons-ready">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hold Up!</title>

    <meta name="referrer" content="no-referrer">
    <meta name="referrer" content="never">
   <link rel="stylesheet" href="./contest/bootstrap.min.css">
    <link rel="stylesheet" href="./contest/styles-min.css">
    <link href="./contest/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/flipclock-min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./src/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./Your Coupon Code!_files/styles.css">
    <link href="./contest/custom-step2.css" rel="stylesheet">


</script>

</head>
<body class="step2" data-gr-c-s-loaded="true">
<div id="vue-page">
<header class="landing-header">
    <div class="container">

        <div class="col-lg-12 alert-headline">

            <h2>HOLD UP!</h2>

            <h3>Why Wait for the Contest? When You Can Buy this {{product_type}} <u>RIGHT NOW</u> for  {{ parseInt((1-sale_price/normal_price)*100)}}%  Off!</h3>
        </div>

</div></header>

<main class="main-content container">

    <section class="offer-info">
        <div class="row">
            <div class="col-lg-6 offer-headline">
        <h3>Secret Amazon Flash Sale. Expires Soon:</h3>
      </div>
           <div class="col-lg-6 offer-countdown">
       
                <div id="countdown-div" >
                  
                </div>

        </div>
        </div>
        <div class="row">
            <div class="col-lg-6 amazon-details">

                
                <img class="five-stars" src="./contest/five-stars-large.png" alt="Five Stars" width="200">

                <img class="amazon-logo" src="./contest/a-smile_color.png" alt="Amazon Logo" width="67" height="auto">

                <h4>FREE Shipping with Amazon PRIME!</h4>

                <h5>You will complete your checkout on Amazon using the coupon code. All orders ship right from
                    Amazon, so you know this is legit. The coupon reduces your TOTAL PRICE to just {{market_place }}{{sale_price}} with FREE
                    SHIPPING if you're Amazon PRIME.</h5>
            </div>
            <div class="col-lg-6 entry-content">
                <h3 class="discount-details">Save {{ parseInt((1-sale_price/normal_price)*100)}}% TODAY Only. Regular Price: {{market_place }}{{normal_price}}</h3>

                <h1><u>You Pay Just:</u><br>
                    {{market_place }}{{sale_price}}</h1>

                <p>To celebrate our launch on Amazon, we are giving away 100 units of our {{product_type}} for only:
                    <strong> {{market_place }}{{sale_price}}</strong>

                                            <span style="font-size: smaller; font-style: italic">Expires: {{end_date}} (Pacific)</span>
                    

                </p>

                <p class="small-pad"><strong>How This Works:</strong> Use the special one-time-use Amazon coupon code that we generateds
                    for you below. Click on the "Buy on Amazon" button to check out this amazing <strong>"Knee Brace Support for only {{market_place }}{{sale_price}}, Free Shipping!",</strong> &amp;
                    verify for yourself that this is an insane bargain we are offering today. You will then complete
                    your checkout right on Amazon, using your coupon code. <strong>This coupon reduces your TOTAL PRICE
                        to only {{market_place }}{{sale_price}}!</strong></p>

                <div class="coupon-code">
                    <h3>Here Is Your Amazon Coupon Code:</h3>

                    <input height="50" width="350" :value="selected_coupon_code" type="text" id="code">

                    <p class="center">
                        <a class="btn btn-default noref"  v-on:click="goAmazon"  target="_blank">
                            <i class="fa fa-angle-double-right"></i>BUY ON AMAZON
                            <span class="sub">Click Here to Claim Deal Now.</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        
    </section>

</main>

<footer class="site-footer" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <small>This promotion is in no way sponsored, endorsed or administered by, or associated with, Facebook
                    or Facebook Inc, or Amazon or Amazon.com. You understand that you are providing your information to
                    {{brand}}  and not to Facebook or Amazon. By participating in this promotion, you agree to a complete
                    release of Facebook &amp; Amazon from any claims. No purchase necessary. Winners will be selected at
                    random once per week. There are no costs associated with entering our contest. Continental USA only.
                    Must be over age 21. © 2018 . All Rights Reserved.
                </small>
            </div>
        </div>


    </div>
</footer>
</div>


<script src="./src/jquery-1.12.4.min.js"></script>
<script src="./src/bootstrap.min.js"></script>
<script src="./src/jquery.flexslider.js"></script>
<script src="./src/flipclock.js"></script>
<script src="./src/common.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript">
 var app = new Vue({
  el: '#vue-page',
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
     selected_coupon_code:"",
     email:""
    
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
                            app.getCoupon();
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
                                    var date = new Date();
                                    date.setTime(date.getTime() + (24*60*60 * 1000));
                                    if($.cookie("offer_id")){
                                        // user has been in this page
                                        app.selected_coupon_code =$.cookie("coupon");
                                        app.selected_coupon_code_id=$.cookie("coupon_id");
                                    }else{
                                        // fisrt time in thie page

                                        $.cookie("offer_id", getUrlParameter('offer_id'),{expires: date});
                                        app.selected_coupon_code = data.data[0].coupon_code;
                                        app.selected_coupon_code_id = data.data[0].id;
                                        $.cookie("coupon", data.data[0].coupon_code,{expires: date});
                                        $.cookie("coupon_id", data.data[0].coupon_code,{expires: date});
                                        app.updateCouponStatus();
                                    }
                                  
                                }else{
                                    app.goExpired()
                                }
                         
                        } else {
                           console.log(data.message);
                        }
                        
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
        //https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me=A1A4U1WT1WWZ8Z&merchant=A1A4U1WT1WWZ8Z&keywords=ankle+brace
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
            if(this.is_super_nova_url!="false"){
                    // super nova
                    if (noval_keyword!=""){
                         var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+"&keywords="+noval_keyword.replace(/ /g,"+")
                        location.href =url
                    }else{
                        var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+""
                        location.href =url
                    }
                 
            }else{
                    // super url
                    if(this.buy_link_keywords!=""){

                        var url = "https://www.amazon.com/"+normal_keyword.replace(/ /g,"+")+"/dp/"+this.product_asin+"/ref=sr_1_1?ie=UTF8&qid="+Date.now()+"&m="+this.seller_id+"&keywords="+normal_keyword.replace(/ /g,"+");
                       location.href =url
                    }else{
                        var url = "https://www.amazon.com/dp/"+this.product_asin+"/?m="+this.seller_id+"";
                       location.href =url
                    }
              }

        }else{
            location.href =this.canonical_url
        }
        
        
        
    },
    updateCouponStatus:function(){
    

         // data for action getAvailableCoupons
                var data_available = {
                    'action': 'updateCouponStatus',
                    'status':'used',
                    'thumbnails':new Date(),
                    'coupon_id':app.selected_coupon_code_id
                }

                // get coupons by offer id
                $.ajax({
                    url: '../php/index.php',
                    type: 'POST',
                    data: data_available,
                    success: function (data, textStatus, jqXHR) {
                  
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        //$.notify('username or password is incorrect .', 'warn');
                    }
                });
        console.log($.cookie("coupon"));


    },
        goExpired:function(msg){
                            if(this.is_redirect){
                                location.href =data.redirect_url;
                            }else{
                                 location.href = "./expired.php?msg="+msg+"&cid="+getUrlParameter('cid')+"&offer_id="+getUrlParameter('offer_id');
                            }

    }

}

})


</script>


</body></html>