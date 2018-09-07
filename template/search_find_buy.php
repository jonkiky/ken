<!DOCTYPE html>
</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>97% DISCOUNT!</title>
 
   <link rel="stylesheet" href="./search_buy/bootstrap.min.css">
    <link href="./search_buy/css" rel="stylesheet">
    <link rel="stylesheet" href="./search_buy/styles.css">
    <link rel="stylesheet" href="./src/flipclock.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./src/flexslider.css" type="text/css" media="screen" />


</head>
<body data-gr-c-s-loaded="true">
<div id="landing-page">

<div class="container main">

    <div class="row">

        <section class="col-md-12">
            <div class="headline">
                <h1><span> {{ parseInt((1-sale_price/normal_price)*100)}}%</span> DISCOUNT</h1>
            </div>
        </section>

    </div>




    <div class="row"> <!-- featured section -->

        <section class="col-md-12 content">

            <h2><span class="emphasis">BUY THIS</span> Top Rated  {{name}}  for only {{market_place }} {{sale_price}}, Free Shipping! On Amazon for <span class="emphasis"> {{ parseInt((1-sale_price/normal_price)*100)}}%  OFF!</span></h2>

            <img :src="'../upload/'+cur_images[0].picture" class="top">

        </section>

        <section class="col-md-12">
            <div class="headline content">
                <h2>Limited Supply Available</h2>
            </div>
        </section>

    </div>





    <div class="row"> <!-- amazon deal text -->

        <section class="content">

            <div class="col-md-8">
                <p class="center">This is a special <span class="emphasis-two">Amazon coupon deal</span> to promote this <span class="emphasis-two">popular new product</span>. Grab this for only {{market_place }} {{sale_price}} which is an incredible <span class="emphasis-two">{{ parseInt((1-sale_price/normal_price)*100)}}% OFF!</span> This is a one-time only opportunity that won't last long!</p>

                <p class="center">All orders are placed <span class="emphasis-two">right through Amazon</span>, so you are assured a smooth transaction. You'll use a unique <span class="emphasis-two">coupon code</span> that will be provided to you on the next page. </p>
            </div>

            <div class="col-md-4">
                <img class="center" src="./search_buy/photo.png">
            </div>

        </section>

    </div>


    <div class="row"> <!-- coupons -->

        <section class="content">
            <div class="col-md-1"></div>
            <div class="col-md-10 cta">

                <h2 class="center only-left"><span class="red">•</span> ONLY <span class="emphasis red">{{numbers_coupons_avi}} </span> COUPONS LEFT <span class="red">•</span></h2>

                <p class="center">• Click the button below to generate a unique
                    coupon code to use on Amazon</p>

                <p class="center">• Then, follow the instructions on how to get your
                    {{ parseInt((1-sale_price/normal_price)*100)}}% off product on the next page.</p>

                                    <a class="btn-warning" v-on:click="grabCoupon"><i class="fa fa-arrow-right" aria-hidden="true"></i> Grab My Coupon Deal</a>
                
            </div>
            <div class="col-md-1"></div>
        </section>

    </div>

    <hr>

    <div class="row"> <!-- simple steps -->

        <section class="content">
            <div class="col-md-1"></div>
            <div class="col-md-10 steps">

                <h3 class="center red">How to Participate</h3>
                <h4 class="center">follow these 3 simple steps!</h4>

                <div class="row flexin">
                    <div class="col-md-1"><img class="max" src="./search_buy/1.png"></div>
                    <div class="col-md-9"><p>• Get your <strong>Amazon Coupon Code</strong> for this deal</p></div>
                    <div class="col-md-2 switch"><img class="switch" src="./search_buy/amazon_coupon.png"></div>
                </div>
                <div class="row grey flexin">
                    <div class="col-md-1"><img class="max" src="./search_buy/2.png"></div>
                    <div class="col-md-9"><p>• Then <strong>add the item</strong> to your cart (exact instructions provided on the next page!)</p></div>
                    <div class="col-md-2 switch"><img class="switch" src="./search_buy/Cart-128.png"></div>
                </div>
                <div class="row flexin">
                    <div class="col-md-1"><img class="max" src="./search_buy/3.png"></div>
                    <div class="col-md-9"><p>• Use Your Coupon Code at the <strong>checkout on Amazon</strong> and get this great product for {{ parseInt((1-sale_price/normal_price)*100)}}%  Off!</p></div>
                    <div class="col-md-2 switch"><img class="switch" src="./search_buy/amazon_checkout.png"></div>
                </div>

                <p class="center red emphasis above-btn">Click the button below to get your coupon deal!</p>
                                    <a class="btn-warning" v-on:click="grabCoupon"><i class="fa fa-arrow-right" aria-hidden="true"></i> Grab My Coupon Deal</a>
                
                <p class="center tight emphasis-three">Coupon code will instantly be generated for you. Limit 1 per person.</p>
                <p class="center tight emphasis-three">Free shipping for Amazon Prime Members</p>

            </div>
            <div class="col-md-1"></div>
        </section>

    </div>

    <hr>

    <div class="row"> <!-- featured image 2 -->
        <section class="content">
            <div class="col-md-12">
                            </div>
        </section>
    </div>

    <hr>

    <div class="row"> <!-- FAQ -->
        <section class="content faq">
            <h3 class="center red">Frequently Asked Questions</h3>

            <div class="col-md-4">
                <h4><i class="fa fa-question-circle"></i> Will I receive Free Shipping?</h4>
                <p>That depends. If you have Amazon Prime, you will be eligible for free shipping. If not, you may be eligible for free standard shipping, but you will need to select that option during checkout if it is available to you.</p>
            </div>

            <div class="col-md-4">
                <h4><i class="fa fa-question-circle"></i> How do I know this is a real deal and not a scam?</h4>
                <p>You are purchasing this product directly from Amazon...the most trusted eCommerce website on Earth. If you still don't feel safe about the purchase, then do not purchase.</p>
            </div>

            <div class="col-md-4">
                <h4><i class="fa fa-question-circle"></i> My coupon code didn't work?</h4>
                <p>You can only use the coupon code one time. When applied, the coupon will reduce the price of the product to  {{market_place }} {{sale_price}} . Coupons will be limited to 1 per household. If you try to reuse your unique coupon code again, it will NOT work a second time.</p>
            </div>
            <div class="col-md-12">

                                    <a class="btn-warning" v-on:click="grabCoupon"><i class="fa fa-arrow-right" aria-hidden="true"></i> Grab My Coupon Deal</a>
                
            </div>
        </section>

         <section class="col-md-12 content">
            <img :src="'../upload/'+cur_images[0].picture" class="top">
        </section>

    </div>


</div>



<footer class="container site-footer">

    <div class="row nav-copyright">

        <div class="col-md-6">
            <p>©  2018. All Rights Reserved</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12">
            <p class="center disclaimer">Disclaimer: This site and the products and services offered on this site are not associated, affiliated, endorsed, or sponsored by Amazon, nor have they been reviewed tested or certified by Amazon.</p>

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
                            $("title").html(parseInt((1-app.sale_price/app.normal_price)*100)+"% DISCOUNT!!!")
                            
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
                  var url = "https://www.amazon.com/s/ref=nb_sb_noss?url=me%"+this.seller_id+"&field-keywords="+noval_keyword.replace(/ /g,"+")
                  location.href =url
            }else{
                  var url = "https://www.amazon.com/"+normal_keyword+"/dp/"+this.product_asin+"/m="+this.seller_id+"&keywords="+this.keywords.replace(/ /g,"+");
                  location.href =url
            }

        }else{
            location.href =this.canonical_url
        }
        
       
    },
    grabCoupon: function(){
        location.href = "./search_find_buy_buy_now.php?cid="+getUrlParameter('cid')+"&offer_id="+getUrlParameter('offer_id');
        
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