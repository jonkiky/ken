<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Panel</title>
    <meta name="description" content="">

    <!-- Latest compiled and minified CSS -->
 <?php include "css.php" ;?>
 

 </head>
<body data-gr-c-s-loaded="true">



<?php include "header.php" ;?>

<div class="container" id="campaign-edit">

<h1><span >{{campaign_title}}</span>
    <span style="font-size: 14px;">

        (<a id="offer_link" href="javascript:void 0">Offers</a>)

    </span>
</h1>


<span style="float: right;clear: both;"></span>

<form action="http://amzflashdealsmi.com/vip/control/campaign-edit.php?cid=5162" method="post">
    <input type="hidden" name="action" value="campaign-edit">
    
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="title" name="title" v-model="title">
    </div>
    <div class="form-group">
        <label for="slug">URL Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" v-model="slug">
        <p class="help-block">The "slug" is what will be used in the URL to identify this campaign. Must only contain lowercase letters, numbers, and dashes e.g. offer-1</p>
    </div>

            <div class="form-group">
            <input type="checkbox" name="redirect_url_enabled" value="yes" v-model="redirect_url_enabled"> <strong>Enable Redirect URL</strong>
            <br><br>
            <label for="redirect_url">Redirect URL</label>
            <input type="text" class="form-control" id="redirect_url" name="redirect_url" v-model="redirect_url">
            <p class="help-block">Redirect to a URL instead of showing the expired page</p>
        </div>
    
    <button  type="button" class="btn btn-default" v-on:click="submit">Submit</button>
</form>

<footer class="footer">
    <p>©2018 </p>
</footer>

</div><!-- /.container -->

<?php include "js.php" ;?>

<script type="text/javascript">

 

var app = new Vue({
  el: '#campaign-edit',
  data:{
    id:"",
    title:"",
    slug:"",
    redirect_url:"",
    redirect_url_enabled:"",
    token:"",
    mode:"",
    campaign_title:""
  },
  created:function(){
    this.token  = getUrlParameter("token");

    if(getUrlParameter("id")){
        this.mode ="edit";
        this.id=getUrlParameter("id")
        this.campaign_title="Edit Campaign";
        // get campaign by id
        $("#offer_link").attr("href","offers.php?token="+this.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("id"))
       var formData={
                'token':this.token,
                'id':this.id,
                'action':'getCampaignById'
            }

            $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        app.id=data.data[0].id;
                        app.title=data.data[0].name;
                        app.slug=data.data[0].url_slug;
                        app.redirect_url=data.data[0].redirect_url;
                        app.redirect_url_enabled=data.data[0].is_redirect=="true"?true:false;
                     }else{
                        $.notify(data.message,"warn");
                     }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("username or password is incorrect .","warn");
                }
             });

    }else{
        $("#offer_link").hide();
        this.mode ="add";
        this.campaign_title="Add Campaign";
    }

  },
  methods:{
   submit:function(){
        // it is edit mode
        var token = this.token;
        if(this.mode == "edit"){
             var formData={
                'title':this.title.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'slug':this.slug.replace(/"/g, "\"").replace(/'/g, "\\\'"),
                'redirect_url':this.redirect_url,
                'redirect_url_enabled':this.redirect_url_enabled,
                'token':this.token,
                'id':this.id,
                'user_id': getUrlParameter("uid"),
                'action':'eidtCampaign'
            }

            $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        window.location.href = "campaigns.php?token="+token+"&uid="+getUrlParameter("uid");
                     }else{
                        $.notify(data.message,"warn");
                     }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("username or password is incorrect .","warn");
                }
             });
        }

        // it is add mode
        if(this.mode == "add"){
            var formData={
                'title':this.title,
                'slug':this.slug,
                'redirect_url':this.redirect_url,
                'redirect_url_enabled':this.redirect_url_enabled,
                'user_id': getUrlParameter("uid"),
                'token':this.token,
                'action':'addCampaign'
            }

            $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                  
                    if(data.code==0){
                        $.notify("update campaigns success .","success");
                            setTimeout(
                                 window.location.href = "campaigns.php?token="+token+"&uid="+getUrlParameter("uid")
                                 ,10000)
                      
                     }else{
                        $.notify(data.message,"warn");
                     }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                   console.log(jqXHR.responseText)
                   $.notify("username or password is incorrect .","warn");
                }
             });

        }

        if(this.mode!="add"&&this.mode!="edit"){

            $.notify("There is something wrong with page setting, is it add a campaign or edit a campaign?","warn");
        }

    }
  }

})
</script>


</body></html>