<!DOCTYPE html>

<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Special Offer</title>

    <meta name="referrer" content="no-referrer">
    <meta name="referrer" content="never">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./src/jquery.flexslider-min.js"></script>

    <link rel="stylesheet" href="./src/bootstrap.min.css">
    <link rel="stylesheet" href="./src/flexslider.css">
    <link rel="stylesheet" href="./src/styles.css">
    <link rel="stylesheet" href="./src/flexslider-override.css">
    <link rel="stylesheet" href="./src/font-awesome.min.css">

    <link rel="stylesheet" href="./src/flipclock-min.css" type="text/css" media="screen" />
    </head>
<body data-gr-c-s-loaded="true">
<div id="landing-page">

<section class="container main-content buy-now-content">

    <div class="row">

        <div class="col-md-12">


                <h1><strong>Here is Your  {{market_place }}{{sale_price}} Amazon.com Coupon Code</strong></h1>

                
                <p>Yes, you read correctly! Because you saw this page, {{name}} for only  {{market_place }}{{sale_price}}, Free Shipping! is <strong>only   {{ parseInt((1-sale_price/normal_price)*100)}}%  off  with Free Amazon PRIME shipping, when you use the Amazon.com coupon below.</strong></p>

                <p>You'll order through Amazon so your purchase is 100% safe and secure. Plus, if you're a prime member you'll even get free shipping! You're going to go through the clickable link we'll give you below that takes you directly to the amazon page to checkout.</p>

                <h2> {{brand}}, Is So Excited To Get Their Product Listed On Amazon.com!</h2>

                <!-- <p>This top rated product is our featured Flash Sale of the Day! This manufacturer agreed to grant us this VERY steep discount, in order to celebrate the launch of their product on Amazon.</p> -->
                <p>To celebrate the launch of our new product, we've decided to practically give away our new {{name}} for only {{market_place }}{{sale_price}}, Free Shipping! for just {{market_place }}{{sale_price}}.</p>
                <p>Obviously we can't do this forever because we lose money every time the special coupon code is redeemed. So that's why we're limiting it to just 100 people. Limit 1 per person. Let me explain how to redeem your coupon immediately before our supplies run out...</p>


                <h1 class="blue"><strong>How To Get This for   {{market_place }}{{sale_price}}  On Amazon.com</strong></h1>

                <div class="couponcode with-bg">
                    <h2>Coupon Code: <span class="coupon-red">{{selected_coupon_code}}</span></h2>
                </div>

                <h4>Step 1: Click On The Link Below To Go To Our Amazon Product Page</h4>
                <p>Our <i>{{name}} for only {{market_place }}{{sale_price}}, Free Shipping!</i> is sold exclusively on Amazon.com, so you'll have to click the button at the bottom of this page. It takes you directly to our amazon product page.</p>

                <img class="add-to-cart" style="margin-bottom: 0px;" src="./src/a2c.png" alt="Add to Cart">

                <h4>Step 2: Add The Item To Your Cart And Proceed To Checkout</h4>
                <p>When you get to our Amazon page, you will need to click the "add to cart" button. Proceed to
                    checkout via Amazon.</p>

                                    <div class="text-center">
                        <img :src="'../upload/'+cur_images[0].picture"  alt="Product Image" style="max-height: 270px;">
                    </div>
                
                <h4>Step 3: On The Checkout Page, Use The Coupon Code: {{selected_coupon_code}}</h4>
                <p>In the "gift cards &amp; promotional codes" put the code "{{selected_coupon_code}}" and click apply. Your total price is now {{market_place }}{{sale_price}}. I realize you may see many sales on the Internet that appear too good to be true, but this is the real deal. It's through Amazon. You can apply the coupon and see for yourself. Amazon might charge sales tax or a small shipping fee (if you're not PRIME), but we only charge you {{market_place }}{{sale_price}} for this product!</p>

                <p>So now that you know how to redeem this for {{market_place }}{{sale_price}} plus get free shipping if you're an Amazon Prime member... and you know why we're doing this... here is where you go to redeem this:</p>

                <div class="couponcode">
                    <h1>Use Coupon Code: <br>
                        <span class="coupon-red">{{selected_coupon_code}}</span>
                    </h1>
                </div>

                <h3 class="center">Click On The Button Below</h3>


                <a class="submit-btn noref"  v-on:click="goAmazon" rel="noreferrer">Order Now on Amazon.com</a>

                <div class="timer-holder">
                    <p>This deal expires on: {{end_date}}</p>

                      <div id="countdown-div" >
                  
                </div>


                </div>

                <p>Remember, to do it right now because there are only {{numbers_coupons_avi}} left available at  {{market_place }}{{sale_price}} . We have a limited supply and this incredible {{market_place }}{{sale_price}}  deal will end within a few hours today when they are sold.</p>
                <p>Also, if you need any help let us know. We love helping our customers and you can write us at <a :href="'mailto:'+email">{{email}}</a></p>
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

<script src="./src/common.js"></script>
<script src="./src/flipclock.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
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
     selected_coupon_code:"",
     selected_coupon_code_id:"",
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

                                                    
                              if(app.is_signup=="custom"){
                                if(app.landing_analytics_code!=""&&app.landing_analytics_code.indexOf("&")>-1){
                                var base_url=app.landing_analytics_code.split("&")[0]
                                var uuid=app.landing_analytics_code.split("&amp;")[1]
                                var base_lid=app.landing_analytics_code.split("&amp;")[2]
                              require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":uuid,"lid":base_lid}) })
                              }
                            }
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
                        window.open(url)
                    }else{
                        var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+""
                        window.open(url)
                    }
                 
            }else{
                    // super url
                    if(this.buy_link_keywords!=""){

                              var url = "https://www.amazon.com/"+normal_keyword.replace(/ /g,"+")+"/dp/"+this.product_asin+"/ref=sr_1_1?ie=UTF8&qid="+Date.now()+"&m="+this.seller_id+"&sr=8-1&keywords="+normal_keyword.replace(/ /g,"+");
                       window.open(url)
             
                    }else{
                        var url = "https://www.amazon.com/dp/"+this.product_asin+"/?m="+this.seller_id+"";
                       window.open(url)
                    }
              }

        }else{
            window.open(this.canonical_url)
        }
        
        
       
    },
    updateCouponStatus:function(){

         // data for action getAvailableCoupons
                var data_available = {
                    'action': 'updateCouponStatus',
                    'status':'used',
                      'coupon_id':app.selected_coupon_code_id
                }

                // get coupons by offer id
                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: data_available,
                    success: function (data, textStatus, jqXHR) {
                  
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        $.notify('username or password is incorrect .', 'warn');
                    }
                });
        console.log($.cookie("coupon"));

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