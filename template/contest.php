<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com fa-events-icons-ready">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Win A Free Product Type from Amazon!</title>

    <link rel="stylesheet" href="./contest/bootstrap.min.css">
    <link rel="stylesheet" href="./contest/styles-min.css">
    <link href="./contest/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/flipclock.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./src/flexslider.css" type="text/css" media="screen" />

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./src/jquery.flexslider-min.js"></script>

<body class="home" data-gr-c-s-loaded="true" >
<div id="landing-page">
    

<header class="landing-header">
    <div class="container">
        <div class="alert alert-info">

            <div class="col-lg-12 alert-headline">

                <h2>** WIN A FREE PRODUCT TYPE FROM AMAZON **</h2>

            </div>

            <div class="col-lg-12 alert-countdown">

                <div id="countdown-div">
                  
                </div>

            </div>
        </div>
</div></header>

<main class="main-content container"  >
    <section class="offer-info">


        <div class="row">

            <div class="col-lg-6 amazon-details">
              

               
                <img class="amazon-logo" src="./contest/a-smile_color.png" alt="Amazon Logo" width="67" height="auto">

                <h4>Winning Item Ships Direct From Amazon</h4>

                <h5>It is free to enter! Winning item ships direct from Amazon. Weekly winner!</h5>

                  <img src="./contest/amazon-stars.png" alt="Amazon Star Rating">
                 <div class="col-md-12 left">
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

                        </ul></div>
                       </div>
            </div>
                

              

            </div>


            <div class="col-lg-6 entry-content" >

                <h1>Free Product Type Giveaway!</h1>

                <p><strong>OMG!</strong> {{lead_sentence}} To celebrate
                    the Amazon release of their NEW <strong>"{{name}}",</strong> {{brand}}is holding a Free Product Type Giveaway contest this week.</p>

                <p><strong>What You Could Win!</strong>"{{product_description}}"</p>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-6 amazon-details">
                <img class="enter-to-win" src="./contest/enter-to-win1.png" alt="Enter to Win!">
            </div>
            <div class="col-lg-6 entry-content">

                <p class="center small-pad"><img src="./contest/weekly-giveaways.png" alt="Weekly Giveaways"></p>

                <p class="center">
                                            <a href="#" v-on:click="grabCoupon" class="btn btn-default">Click Here to Win</a>
                                    </p>


                <div class="modal fade" id="email-capture-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h3 class="modal-title" id="myModalLabel">Enter To Win Free Product Type Contest!</h3>

                                <p>Winner Announced By Email in Approximately 5-7 days.</p>
                            </div>
                        
                        </div>
                    </div>
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
                  app.initFlexslider();
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
                //app.initFlexslider()

            });


  },
  Mounted:function (){
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
            if(this.is_super_nova_url){
                  var url = "https://www.amazon.com/s?marketplaceID=ATVPDKIKX0DER&me="+this.seller_id+"&merchant="+this.seller_id+"&keywords="+noval_keyword.replace(/ /g,"+")
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
        location.href = "./contest_buy_now.php?cid="+getUrlParameter('cid')+"&offer_id="+getUrlParameter('offer_id');
        
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