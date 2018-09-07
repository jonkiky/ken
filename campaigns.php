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


<div class="container" id="campaign-list">

    <h1>Campaigns</h1>


    <span style="float: right;"><a  href="#" v-on:click="addCampaign">Add New Campaign</a></span>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Url</th>
            <th>Status</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
   
            <tr  v-for="campaign in campaigns" v-if="campaign.status!='deleted'">
                    <td>{{campaign.id}}</td>
                    <td>{{campaign.name}}</td>
                    <td>{{campaign.url_slug}}</td>
                    <td>
                        <input  type="text" style="border: 1px solid #eee; font-style: italic; color: green;" v-model="campaign.url_slug_http">
                    </td>
                    <td>{{campaign.status}}</td>
                    <td> 
                        <a href="javascript:void 0" v-on:click="edit(campaign.id)">edit</a>
                    </td>
                    <td><a href="javascript:void 0" v-on:click="duplicate(campaign.id)">duplicate</a>
                    </td>
                    <td><a href="javascript:void 0" v-on:click="offers(campaign.id)">offers</a>
                    </td>
                    <td>
                          <a href="javascript:void 0" v-on:click="deleteCampaign(campaign.id)" >Delete</a>
                    </td>
                </tr>
      
           
           
                </tbody>
    </table>

 

 <div>
     

 </div>

<footer class="footer">
    <p>©2018 |</p>
</footer>

</div><!-- /.container -->


<?php include "js.php" ;?>

<script type="text/javascript">
    

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
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                    if(data.code==0){
                        for(var i in data.data){
                             data.data[i]["url_slug_http"]=window.location.hostname+"/template/vip.php/"+data.data[i]["url_slug"]+"-"+data.data[i]["id"]
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
                  url : "php/index.php",
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


</script>>

</body></html>