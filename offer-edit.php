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


<div class="container" id="offer-edit">
    <h1>Campaign - <a v-on:click="goToCampaign">{{campaign_title}}</a></h1>
    <h2>{{offer_title}}
        <span style="font-size: 14px;">
        (<a href="#" v-on:click="goToCoupon" v-show="mode=='edit'">Coupons</a> |
        <a href="#" v-on:click="goToPic" v-show="mode=='edit'">Images</a>)
    </span>
    </h2>

    <h2 v-show="mode=='edit'">Preview
        <span style="font-size: 14px;">
        (<a href="javascript:void 0" v-on:click="goToLanding">Landing</a> |
        <a href="javascript:void 0"  v-on:click="goToBuyNow">Buy Now</a> |
        <a href="javascript:void 0"  v-on:click="goToExpired">Expired</a> |
        <a href="javascript:void 0"  v-on:click="goToExpiredWithOffer">Expired with Upcoming Offer</a>)
    </span>
    </h2>


    <span style="float: right;clear: both;"></span>

<form  method="post">
    <input type="hidden" name="action" value="product-edit">
    <div class="form-group">
        <label for="title">Offer Name *</label>
        <input type="text" class="form-control" id="title" name="title" v-model="name" placeholder="Enter name">
    </div>

    <div class="checkbox">
        <label for="is_active">
            <input id="is_active" name="is_active" type="checkbox" v-model="status"> Is this offer Active?
        </label><br>
        <p class="help-block">Inactive offers will not be shown to customers. Offers will be automatically set to inactive if it's found that there are no available coupons</p>
    </div>

    <div class="form-group">
        <label for="template">Template Style</label>
        <select name="template" id="template" class="form-control" style="width: 270px;" v-model="selected_template">
            <option v-for="t in template" v-bind:value="t.id">
            {{ t.title }}
          </option>
        </select>
    </div>




    <div class="checkbox">
        <label for="is_evergreen">
            <input id="is_evergreen" name="is_evergreen" type="checkbox" v-model="is_ever_green"> Is this "Evergreen"?
        </label><br>
        <p class="help-block">"Evergreen" offers will expire for individuals at midnight, but have no hard start or expiration date</p>
    </div>

    <div class="form-group non-evergreen-date">
        <label for="start_date">Start Date (for non-evergreen offers){{start_date}}</label>
        <div class="input-group date" id="datetimepicker2" style="width: 250px;">
            <input type="text" class="form-control" id="start_date" name="start_date"  placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <p class="help-block">For non-evergreen offers, select a specific start date and time.</p>
    </div>
    <div class="form-group non-evergreen-date">
        <label for="expiration">Expiration (for non-evergreen offers){{end_date}}</label>
        <div class="input-group date" id="datetimepicker1" style="width: 250px;">
            <input type="text" class="form-control" id="end_date" name="expiration"  placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <p class="help-block">For non-evergreen offers, select a specific expiration date and time.</p>
    </div>

    <div class="form-group" id="daily-coupon-distribution-limit">
        <label for="daily_coupon_limit">Daily Coupon Distribution Limit</label>
        <input type="text" class="form-control" name="daily_coupon_limit" id="daily_coupon_limit"  v-model="daily_coupon_limited">
        <p class="help-block">e.g. setting this to 10 means that only 10 different coupon codes will be shown every day. Empty value (or 0) means no limit.</p>
    </div>


    <br>
    <hr class="style-hr">
    <h3>Landing Page Info</h3>
    <div class="form-group">
        <label for="market_place">Market Place * </label>
        <select name="market_place" id="market_place" class="form-control" style="width: 200px;" v-model="market_place">
            <option value="us">US</option>
            <option value="uk">UK</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Sale Price *</label>
        <input type="text" class="form-control" id="price" name="price"  v-model="sale_price">
        <p class="help-block">Sale price, without currency symbol. e.g. 9.99</p>
    </div>
    <div class="form-group">
        <label for="normal_price">Normal Price *</label>
        <input type="text" class="form-control" id="normal_price" name="normal_price"  v-model="normal_price">
        <p class="help-block">Normal price, without currency symbol. e.g. 19.99</p>
    </div>


    <div class="form-group">
        <label for="product_name">Product Name *</label>
        <input type="text" class="form-control" id="product_name" name="product_name" v-model="product_name">
        <p class="help-block">e.g. Top Rated [PRODUCT_NAME] for only $1.00, Free Shipping!</p>
    </div>



    <div class="form-group">
        <label for="brand">Brand *</label>
        <input type="text" class="form-control" id="brand" name="brand" v-model="brand">
        <p class="help-block">e.g. [BRAND] Is So Excited To Get Their Product Listed On Amazon.Com!</p>
    </div>
    <div class="form-group">
        <label for="company_email">Company Email Address *</label>
        <input type="text" class="form-control" id="company_email" name="company_email" v-model="email">
        <p class="help-block">e.g. We love helping our customers and you can write us at [COMPANY EMAIL ADDRESS]</p>
    </div>

    <div class="form-group">
        <label for="aweber_type">Signup</label>
        <select name="aweber_type" id="aweber_type" class="form-control" style="width: 200px;" v-model="is_signup">
            <option value="custom"> Mailchimp</option>
            <option value="direct" selected="selected">No Signup (direct link)</option>
        </select>
    </div>
    <div id="aweber_id_display" class="form-group" style="display: none;">
        <label for="aweber_id">MailCamp List ID</label>
        <input type="text" class="form-control" id="aweber_id" name="aweber_id" v-model="aweber_id">
        <p class="help-block">Enter your Aweber List ID</p>
    </div>

    <div class="form-group">
        <label for="js_landing_analytics">mailchimp Code</label>
        <textarea class="form-control" id="js_landing_analytics" name="js_landing_analytics" style="height: 200px;"  v-model="landing_analytics_code"></textarea>
    </div>

    <div class="flash_sale_fields">
        <div class="form-group">
            <label for="benefit_1">Benefit 1 (flash_sale)</label>
            <input type="text" class="form-control" id="benefit_1" name="benefit_1"  v-model="benefit1" maxlength="76">
        </div>
        <p class="help-block">Max 76 characters</p>
        <div class="form-group">
            <label for="benefit_2">Benefit 2(flash_sale)</label>
            <input type="text" class="form-control" id="benefit_2" name="benefit_2" v-model="benefit2" maxlength="76">
        </div>
        <p class="help-block">Max 76 characters</p>
    </div>

  <!--   <div class="search_find_buy_fields">
        <div class="form-group">
            <label for="search_find_keywords">Search Keywords</label>
            <textarea class="form-control" id="search_find_keywords" name="search_find_keywords" style="height: 200px;" v-model="search_key_words"></textarea>
            <p class="help-block">One keyword or keyword phrase per line</p>
        </div>
        <div class="checkbox">
            <label for="search_find_wishlist">
                <input id="search_find_wishlist" name="search_find_wishlist" type="checkbox" v-model="add_to_wishlist"> Add to wishlist?
            </label><br>
            <p class="help-block">If checked, the Buy Now page will instruct them to add the product to the wishlist before they purchase it.</p>
        </div>
    </div>
 -->

    <div class="contest_fields">
        <div class="form-group">
            <label for="contest_product_type">Product Type(contest)</label>
            <input type="text" class="form-control" id="contest_product_type" name="contest_product_type" v-model="product_type">
            <p class="help-block">
                Simple way to describe your product e.g. Dog Leash
            </p>
        </div>
        <div class="form-group">
            <label for="contest_lead_sentence">Lead Sentence(contest)</label>
            <input type="text" class="form-control" id="contest_lead_sentence" name="contest_lead_sentence" v-model="lead_sentence">
            <p class="help-block">
                Single sentence to build excitement for your product. e.g. Dog lovers are FREAKING OUT over this Free Dog Leash Giveaway!
            </p>
        </div>
        <div class="form-group">
            <label for="contest_product_description">Product Description(contest)</label>
            <textarea class="form-control" id="contest_product_description" name="contest_product_description" style="height: 200px; " v-model="product_description"></textarea>
            <p class="help-block">
                A couple sentences describing the product e.g. size, colors, features. Will appear on the landing page.</p>
        </div>
    </div>


    <!-- <div class="freq_fields">
        <div class="form-group">
            <label for="freq_deal_description">Deal Description</label>
            <textarea class="form-control" id="freq_deal_description" name="freq_deal_description" style="height: 200px;" v-model="freq_deal_description"></textarea>
            <p class="help-block">Description of products, the deal, etc. Will appear as first text block on landing page</p>
        </div>
        <div class="form-group">
            <label for="freq_free_product_name">Free Product Name</label>
            <input type="text" class="form-control" id="freq_free_product_name" name="freq_free_product_name" value="" v-model="freq_free_product_name">
        </div>
        <p class="help-block"></p>
        <div class="form-group">
            <label for="freq_free_product_value">Free Product Value</label>
            <input type="text" class="form-control" id="freq_free_product_value" name="freq_free_product_value" v-model="freq_free_product_value">
            <p class="help-block">Free product value, without currency symbol. e.g. 19.99</p>
        </div>
        <div class="form-group">
            <label for="freq_free_product_buy_url">Custom Buy URL</label>
            <input type="text" class="form-control" id="freq_free_product_buy_url" name="freq_free_product_buy_url"  v-model="freq_free_product_buy_url">
            <p class="help-block">A custom Buy URL that adds both products to the Amazon cart</p>
        </div>
    </div> -->

   <!--  <div class="freq_discount_fields">
        <div class="form-group">
            <label for="freq_disc_description">Deal Description</label>
            <textarea class="form-control" id="freq_disc_description" name="freq_disc_description" style="height: 200px;" v-model="freq_disc_description"></textarea>
            <p class="help-block">Description of products, the deal, etc. Will appear as first text block on landing page</p>
        </div>
        <div class="form-group">
            <label for="freq_disc_product_name">Discounted Product Name</label>
            <input type="text" class="form-control" id="freq_disc_product_name" name="freq_disc_product_name" v-model="freq_disc_product_name"> 
        </div>
        <p class="help-block"></p>
        <div class="form-group">
            <label for="freq_disc_product_value">Discounted Product Value</label>
            <input type="text" class="form-control" id="freq_disc_product_value" name="freq_disc_product_value" v-model="freq_disc_product_value">
            <p class="help-block">Discounted product full value, without currency symbol. e.g. 19.99</p>
        </div>
        <div class="form-group">
            <label for="freq_disc_product_discount">Discounted Product Percentage Off</label>
            <input type="text" class="form-control" id="freq_disc_product_discount" name="freq_disc_product_discount" v-model="freq_disc_product_discount">
            <p class="help-block">Discount percentage expressed as integer e.g. 99% off would be entered as 99</p>
        </div>
        <div class="form-group">
            <label for="freq_disc_product_buy_url">Custom Buy URL</label>
            <input type="text" class="form-control" id="freq_disc_product_buy_url" name="freq_disc_product_buy_url"  v-model="freq_disc_product_buy_url">
            <p class="help-block">A custom Buy URL that adds both products to the Amazon cart</p>
        </div>
    </div> -->
<!-- 
    <br>
    <hr class="style-hr">
    <h3>Thank You Page Info</h3>
    <div class="form-group">
        <label for="js_thanks_analytics">Thank You Page Tracking/Analytics Code</label>
        <textarea class="form-control" id="js_thanks_analytics" name="js_thanks_analytics" style="height: 200px;" v-model="thank_you_analytics_code"></textarea>
    </div> -->

<!--     <div class="form-group contest_fields">
        <label for="is_upviral">
            <input id="is_upviral" name="is_upviral" type="checkbox" v-model="is_upviral"> Is UpViral Active?
        </label><br>
        <p class="help-block">If checked, the Buy Now page will show the UpViral form using the embed code below.</p>
    </div>
    <div class="form-group contest_fields" id="upviral_embed_code">
        <label for="upviral_code">UpViral Embed Code</label>
        <textarea name="upviral_code" id="upviral_code" class="form-control" rows="10" v-model="upviral_code"></textarea>
    </div> -->

    <div id="product_urls_formgroup">
    <br>
    <hr class="style-hr">

    <h3>Product URLs</h3>
    <div class="form-group">
        <label for="seller_id">Seller ID (optional)</label>
        <input type="text" class="form-control" id="seller_id" name="seller_id"  v-model="seller_id">
        <p class="help-block">Can leave blank, or provide it to include in the URL</p>
    </div>

    <div class="form-group">
        <label for="asin">Product ASIN</label>
        <input type="text" class="form-control" id="asin" name="asin" v-model="product_asin">
    </div>

    <p class="product-url-help">There are 5 options for your Product URL</p>
    <ol class="product-url-help">
        <li>Product ASIN - You are required to place your ASIN above. If you do not select any options below, then all buyers will be sent to the raw Amazon link in this format: http://www.amazon.com/dp/xxxxxxx</li>
        <li>Canonical URL - If you input your Amazon canonical URL, this will override the basic ASIN url.</li>
        <li>Super URL (Keywords) - If you place keywords (one per line) below, the SUPER URL links will be used.</li>
        <li>URL Rotation - if you place URLs (one per line), the URL rotation will be used.</li>
        <li>SUPER NOVA URL - Choose this option to use the new SUPER NOVA URL. Seller ID required above. Keywords are optional below.</li>
    </ol>

    <div class="form-group">
        <label for="canonical_url">Canonical URL (optional)</label>
        <input type="text" class="form-control" id="canonical_url" name="canonical_url" v-model="canonical_url">
    </div>

    <div class="form-group">
        <label for="buy_link_keywords">Keywords (optional)</label>
        <textarea class="form-control" id="buy_link_keywords" name="buy_link_keywords" style="height: 200px;" v-model="buy_link_keywords"></textarea>
        <p class="help-block">One keyword or keyword phrase per line</p>
    </div>

    <div class="form-group">
        <label for="url_rotation">URL Rotation (optional)</label>
        <textarea class="form-control" id="url_rotation" name="url_rotation" rows="5" v-model="url_rotation"></textarea>
        <p class="help-block">One URL per line</p>
    </div>

    <div class="form-group" >
        <label for="use_super_nova_url"><input type="checkbox" name="use_super_nova_url" id="use_super_nova_url" v-model="is_super_nova_url"> SUPER NOVA URL</label>
        <p class="help-block">Seller ID is required. Keywords are optional.</p>
        <textarea class="form-control" id="super_nova_keywords" name="super_nova_keywords" rows="5" v-model="super_noval_url_keyword">patella brace men
patella brace women
patella support xl
patella brace large</textarea>
        <p class="help-block">One keyword or keyword phrase per line</p>
    </div>
</div>


    <br>
   <!--  <hr class="style-hr">
    <h3>Deal Club</h3>

    <div class="form-group">
        <label for="club_name">Deal Club Name (optional)</label>
        <input type="text" class="form-control" id="club_name" name="club_name" v-model="club_name">
    </div>

    <div class="form-group">
        <label for="club_url">Deal Club URL (optional)</label>
        <input type="text" class="form-control" id="club_url" name="club_url" v-model="deal_club_url">
    </div> -->

    <button type="button" v-on:click="submit" class="btn btn-default">Submit</button>
</form>


<footer class="footer">
    <p>©2018 </p>
</footer>

</div><!-- /.container -->


<?php include "js.php" ;?>

<script type="text/javascript">
    

   $(function () {
        $('#datetimepicker1').datetimepicker({
            startDate: "2018-02-14 10:00",
            format: 'yyyy-mm-dd hh:ii'
        });

        $('#datetimepicker2').datetimepicker({
            startDate: "2018-02-14 10:00",
            format: 'yyyy-mm-dd hh:ii'
        });
    });


 var app = new Vue({
  el: '#offer-edit',
  data:{
   
    campaign_title:"",
    offer_title:"",
    id:"",
    name:"",
    status:"",
    template_id:-1,
    is_ever_green:"",
    start_date:"",
    end_date:"",
    daily_coupon_limited:"",
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
    mode:"",
    campaign_id:"",
     token:"",
     user_id:-1,
     selected_template:""

    
  },
  created:function(){
    if(getUrlParameter("token")&&getUrlParameter("cid")&&getUrlParameter("uid")){

            this.token  = getUrlParameter("token");
            this.campaign_id  = getUrlParameter("cid");
            this.user_id  = getUrlParameter("uid");

             //get campaign title 

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
                        app.campaign_title = data.data[0].name;
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

            // get template 


            var formData={
                'token':getUrlParameter("token"),
                'action':'getTemplate'
            }
            $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
              success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        for(var i in data.data){
                            app.template.push(data.data[i]);
                            app.selected_template = data.data[i].id;
                        }
                    }else{
                        $.notify("No template found .","warn");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("get template fails .","warn");
                }
             });





            if(getUrlParameter("id")){
                this.mode ="edit";
                this.offer_title ="edit offer";
                this.id  = getUrlParameter("id");

                // get offer info 
                var formData={
                    'token':getUrlParameter("token"),
                    'id':this.id,
                    'action':'getOfferById'
                }
                $.ajax({
                  url : "php/index.php",
                  type: "POST",
                  data : formData,
                  success: function(data, textStatus, jqXHR)
                    {
                        if(data.code==0){
                            data=data.data[0];

                            if(data.landing_analytics_code!=""&&data.landing_analytics_code.indexOf("&")>1){
                                var base_url=data.landing_analytics_code.split("&")[0]
                                var uuid=data.landing_analytics_code.split("&")[1]
                                var base_lid=data.landing_analytics_code.split("&")[3]
                                data.landing_analytics_code="<script type=\"text/javascript\" src=\"//downloads.mailchimp.com/js/signup-forms/popup/embed.js\" data-dojo-config=\"usePlainJson: true, isDebug: false\"><\/script><script type=\"text/javascript\">require([\"mojo/signup-forms/Loader\\\"], function(L) { L.start({\"baseUrl\":\"mc.us18.list-manage.com\",\"uuid\":"+uuid+",\"lid\":"+base_lid+"}) })<\/script>"
                            }
                            console.log("get offer info");
                            app.name=data.name;
                            app.status=data.status;
                            app.template_id=data.template_id;
                            app.is_ever_green=data.is_ever_green;
                            app.start_date=data.start_date;
                            app.end_date=data.end_date;
                            // init datetimepicker
                            $("#start_date").val(data.start_date)
                            $("#end_date").val(data.end_date)


                            app.daily_coupon_limited=data.daily_coupon_limited;
                            app.market_place=data.market_place;
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
                            app.is_super_nova_url=data.is_super_nova_url=="false"?false:true;
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
                            app.mode="edit";
                            app.user_id=data.user_id;
                            app.selected_template=data.template_id;

                        }else{
                            $.notify("Ge offer fails .","warn");
                        }
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                       console.log(jqXHR.responseText)
                       $.notify("Get offer fails .","warn");
                    }
                 });



            }else{
                this.mode ="add";
                this.offer_title ="add offer";

            }
            


    }else{
         $.notify("invalid URL .","warn");
    }
 
   

  },
  methods:{
    goToLanding:function(){
          switch(this.selected_template) {
                case "1":
                    // Flash Sale Offer
                    var url = "template/flashsale.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
      
                    break;
                case "2":
                    //Giveaway Offer
                     var url = "template/landing.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "3":
                    //Search-Find-Buy
                     var url = "template/search_find_buy.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "4":
                    //Frequently Bought Together (Free)
          
                     var url = "template/buy_together_discount_free.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "5":
                    //Frequently Bought Together (Discount)
          
                     var url = "template/buy_together_discount.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "6":
                    // content
                     var url = "template/contest.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                default:
                 // Flash Sale Offer
                    var url = "template/flashsale.php?isView=true&oken=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
      
                    break;
                   
            }
           window.open(url,'_blank');
 
    },
    goToBuyNow:function(){
            switch(this.selected_template) {
                case "1":
                    // giveway
                      var url  = "template/flashsale_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
      
                    break;
                case "2":
                      var url  = "template/give_away_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "3":
                      var url  = "template/search_find_buy_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "4":
                    //Frequently Bought Together (Free)
          
                     var url = "template/buy_together_discount_free_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "5":
                    //Frequently Bought Together (Discount)
          
                     var url = "template/buy_together_discount_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                case "6":
                    // content
                     var url = "template/contest_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
                    break;
                default:
                 // Flash Sale Offer
                    var url = "template/flashsale_buy_now.php?isView=true&token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
      
                    break;
            }
           window.open(url,'_blank');

    },
    goToExpired:function(){


           var url  = "template/expired.php?token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
           window.open(url,'_blank');

    },
    goToExpiredWithOffer:function(){
           var url  = "template/expired_with_upcoming.php?token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
           window.open(url,'_blank');

    },
    goToPic:function(){
      window.location.href = "image.php?token=" + this.token + "&uid="+getUrlParameter("uid") + "&cid=" + getUrlParameter("cid") + "&offer_id=" + getUrlParameter("id");
    },
    goToCoupon:function(){
        window.location.href = "coupons-edit.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&offer_id="+getUrlParameter("id")+"&cid="+getUrlParameter("cid");
    },
    goToCampaign:function(){
        window.location.href = "campaigns.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&id="+getUrlParameter("cid");
       
     },
    submit:function(){
          // add offer
          var base_url =""
          var base_uuid=""
          var base_lid=""
          var landing_code=""
          if(this.landing_analytics_code!=""){
                base_url = this.landing_analytics_code.split("baseUrl")[1].split("uuid")[0];
                base_url=base_url.substring(3,base_url.length-3);

                base_uuid = this.landing_analytics_code.split("baseUrl")[1].split("uuid")[1].split("lid")[0];

                base_uuid= base_uuid.substring(3,base_uuid.length-3)

                base_lid = this.landing_analytics_code.split("baseUrl")[1].split("uuid")[1].split("lid")[1]; 
                base_lid=base_lid.substring(3,base_lid.length-15);
                landing_code="&"+base_uuid+"&"+base_lid

          }
         
            var formData={
                'campaign_title':this.campaign_title.replace(/"/g, "\""),
                'offer_title':this.offer_title.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'id':this.id,
                'name':this.name.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'status':this.status,
                'template_id':this.selected_template,
                'is_ever_green':this.is_ever_green,
                'start_date':$("#start_date").val(),
                'end_date':$("#end_date").val(),
                'daily_coupon_limited':this.daily_coupon_limited,
                'market_place':this.market_place,
                'sale_price':this.sale_price,
                'normal_price':this.normal_price,
                'product_name':this.product_name,
                'brand':this.brand.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'email':this.email,
                'is_signup':this.is_signup,
                'benefit1':this.benefit1.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'landing_analytics_code':landing_code,
                'benefit2':this.benefit2.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'thank_you_analytics_code':this.thank_you_analytics_code,
                'seller_id':this.seller_id,
                'product_asin':this.product_asin,
                'canonical_url':this.canonical_url,
                'buy_link_keywords':this.buy_link_keywords.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'url_rotation':this.url_rotation,
                'is_super_nova_url':this.is_super_nova_url,
                'super_noval_url_keyword':this.super_noval_url_keyword.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'club_name':this.club_name.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'deal_club_url':this.deal_club_url,
                'campaign_id':this.campaign_id,
                'aweber_id':this.aweber_id,
                'search_key_words':this.search_key_words.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'product_type':this.product_type.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'lead_sentence':this.lead_sentence.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'product_description':this.product_description.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'freq_deal_description':this.freq_deal_description.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'freq_free_product_name':this.freq_free_product_name.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'freq_free_product_value':this.freq_free_product_value,
                'freq_free_product_buy_url':this.freq_free_product_buy_url,
                'freq_disc_description':this.freq_disc_description.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'freq_disc_product_name':this.freq_disc_product_name.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'freq_disc_product_value':this.freq_disc_product_value,
                'freq_disc_product_discount':this.freq_disc_product_discount,
                'freq_disc_product_buy_url':this.freq_disc_product_buy_url,
                'is_upviral':this.is_upviral,
                'upviral_code':this.upviral_code,
                'mode':this.mode,
                'campaign_id':this.campaign_id,
                'token':this. token,
                'user_id':this. user_id,
                'selected_template':this. selected_template,
                'add_to_':this.add_to_wishlist,
                'action':'addOffer'
                };

         if(this.daily_coupon_limited===""){
            formData["daily_coupon_limited"]=-1
         }
        if(this.mode=='add'){
          
            $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
              success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                         $.notify("add offer success .","success");
                         setTimeout(
                             window.location.href = "offers.php?token="+app.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid")
                             ,10000)
                    }else{
                        $.notify("Add offer  fails .","warn");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                    $.notify("Add offer  fails .","warn");
                }
             });

        }


        if(this.mode=='edit'){
             formData.action ="editOffer";
             // edit offer
                  $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
              success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                         $.notify("edit offer success .","success");
                         setTimeout(
                             window.location.href = "offers.php?token="+app.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid")
                             ,10000)
                    }else{
                        $.notify("edit offer  fails .","warn");
                    }
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                    $.notify("edit offer  fails .","warn");
                }
             });
        }
    }
 }

})
</script>



</body></html>