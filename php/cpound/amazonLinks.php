<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Back Office</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect

  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

     <?php include "header.php" ;?>
     
    <?php include "aside.php" ;?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

         <div class= "row" >
        

           <div class="col-md-4 col-xs-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Amazon keyword</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      
                      <input type="text"  id="input-code" class="keywords form-control" placeholder="Enter Key Words">

                    </div>
    
                  </form>
                </div><!-- /.box-body -->
                <div class="box-footer">
                     <button   id="createCode" type="bottom" class="btn btn-primary">Submit</button>
                    </div>
              </div>

          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Amazon keyword Lists</h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody id="coupon-list"><tr>
                      <th style="width: 10px">#</th>
                      <th>Keyword</th>
                      <th style="width: 80px">Action</th>
                    </tr>
            
                
                 
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
           </div>



           <div class="col-md-4 col-xs-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Amazon URL</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      
                      <input type="text"  id="input-url" class="keywords form-control" placeholder="Enter URL">

                    </div>
    
                  </form>
                </div><!-- /.box-body -->
                <div class="box-footer">
                     <button   id="createURL" type="bottom" class="btn btn-primary">Submit</button>
                    </div>
              </div>

          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Amazon URL Lists</h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody id="url-list"><tr>
                      <th style="width: 10px">#</th>
                      <th>URLs</th>
                      <th style="width: 80px">Action</th>
                    </tr>
            
                
                 
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
           </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <?php include "footer.php"; ?>

      <!-- Control Sidebar -->
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->




    <!-- REQUIRED JS SCRIPTS -->

    <?php include "js.php"; ?>

    <script type="text/javascript">

var URL = "../index.php";
var uploadedfileName ="";
var lpId=-1;

$(document).ready(function() {
     

   $("#createCode").click(function(){
      if($("#input-code").val()==""){
        $.notify("Amazon Keyword  could not be none .","warn");
      }else{

        addAmazonKeyword($("#input-code").val());
      }

  })


$("#createURL").click(function(){
      if($("#input-rul").val()==""){
        $.notify("Amazon URL  could not be none .","warn");
      }else{

        addAmazonURL($("#input-url").val());
      }

  })



    function init(){
      getKeyWords();
      getURL();
    }
    init();

});


function getKeyWords(){
var formData={
    'action':'getKeyWords'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
      var size =data.data.length;
      for(var i = 0 ; i<size;i++){
        var input = data.data[i].keywords;
        var html =
        '<tr id="code_'+input+'">'+
'<td><input class="code-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data[i].id+'" >'+data.data[i].id+'</td>'+
'<td> <input class="code-'+input+'" type="text" class="form-control" '+
'placeholder="'+input+'"  value ="'+input+'" disabled="true">'+
'</td>'+
'<td>'+
'<div class="input-group-btn btn-code-edit-'+input+'">'+
'<a onclick="edit(\''+input+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-code-save-'+input+'"  style="display:none;">'+
'<a onclick="save(\''+input+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="delKeyWords(\''+input+'\')" class="btn btn-block btn-primary btn-sm">Delete</a>'+
'</div>'+
'</td>'+
'</tr>';
        $("#coupon-list").append(html);
      }
        
       

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });

}



function getURL(){
var formData={
    'action':'getURL'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
      var size =data.data.length;
      for(var i = 0 ; i<size;i++){
        var input = data.data[i].url;
        var html =
        '<tr id="url_'+input+'">'+
'<td><input class="url-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data[i].id+'" >'+data.data[i].id+'</td>'+
'<td> <input class="url-'+input+'" type="text" class="form-control" '+
'placeholder="'+input+'"  value ="'+input+'" disabled="true">'+
'</td>'+
'<td>'+
'<div class="input-group-btn btn-url-edit-'+input+'">'+
'<a onclick="editURL(\''+input+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-url-save-'+input+'"  style="display:none;">'+
'<a onclick="saveURL(\''+input+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="delURL(\''+input+'\')" class="btn btn-block btn-primary btn-sm">Delete</a>'+
'</div>'+
'</td>'+
'</tr>';
        $("#url-list").append(html);
      }
        
       

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });

}


function addAmazonKeyword (input) {
  var formData={
    'keywords':input,
    'action':'addKeywords'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
        var html =
        '<tr id="code_'+input+'">'+
'<td><input class="code-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data+'" >'+data.data+'</td>'+
'<td> <input class="code-'+input+'" type="text" class="form-control" '+
'placeholder="'+input+'"   value ="'+input+'"  disabled="true">'+
'</td>'+
'<td>'+
'<div class="input-group-btn btn-code-edit-'+input+'">'+
'<a onclick="edit(\''+input+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-code-save-'+input+'"  style="display:none;">'+
'<a onclick="save(\''+input+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="delKeyWords(\''+input+'\')" class="btn btn-block btn-primary btn-sm">Delete</a>'+
'</div>'+
'</td>'+
'</tr>';
        $("#coupon-list").append(html);
         $.notify("Create coupon code success .","success");

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}



function addAmazonURL (input) {
  var formData={
    'keywords':input,
    'action':'addURL'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
        var html =
        '<tr id="url_'+input+'">'+
'<td><input class="url-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data+'" >'+data.data+'</td>'+
'<td> <input class="url-'+input+'" type="text" class="form-control" '+
'placeholder="'+input+'"   value ="'+input+'"  disabled="true">'+
'</td>'+
'<td>'+
'<div class="input-group-btn btn-url-edit-'+input+'">'+
'<a onclick="editURL(\''+input+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-url-save-'+input+'"  style="display:none;">'+
'<a onclick="saveURL(\''+input+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="delURL(\''+input+'\')" class="btn btn-block btn-primary btn-sm">Delete</a>'+
'</div>'+
'</td>'+
'</tr>';
        $("#url-list").append(html);
         $.notify("Create coupon url success .","success");

    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}





function delKeyWords(id){
 delKeyWord(id,-1);
 $("#code_"+id).hide();

}

function delURL(id){
 delURLs(id,-1);
 $("#url_"+id).hide();

}

function edit(id){
   $(".code-"+id).removeAttr("disabled") 
   $(".btn-code-save-"+id).show();
   $(".btn-code-edit-"+id).hide();
}

function editURL(id){
   $(".url-"+id).removeAttr("disabled") 
   $(".btn-url-save-"+id).show();
   $(".btn-url-edit-"+id).hide();
}

function save(id){
  updateAmazonCode(id,0);
}


function saveURL(id){
  updateAmazonURL(id,0);
}


function delKeyWord(id){
   var formData={
    'id':$(".code-id-"+id).val(),
    'action':'delKeyWords'
  }
    $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         $(".code-"+id).attr("disabled","true");
         $(".btn-code-save-"+id).hide();
         $(".btn-code-edit-"+id).show();
          $.notify("Update Amazon keyword success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}


function delURLs(id){
   var formData={
    'id':$(".url-id-"+id).val(),
    'action':'delURL'
  }
    $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         $(".url-"+id).attr("disabled","true");
         $(".btn-url-save-"+id).hide();
         $(".btn-url-edit-"+id).show();
          $.notify("Update Amazon keyword success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}

function updateAmazonCode (id,status) {
  var formData={
    'keywords':$(".code-"+id).val(),
    'id':$(".code-id-"+id).val(),
    'action':'updateKeyWords'
  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         $(".code-"+id).attr("disabled","true");
         $(".btn-code-save-"+id).hide();
         $(".btn-code-edit-"+id).show();
          $.notify("Update Amazon keyword success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}


function updateAmazonURL (id,status) {
  var formData={
    'keywords':$(".url-"+id).val(),
    'id':$(".url-id-"+id).val(),
    'action':'updateURL'
  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         $(".url-"+id).attr("disabled","true");
         $(".btn-url-save-"+id).hide();
         $(".btn-url-edit-"+id).show();
          $.notify("Update Amazon keyword success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}



    </script>
  </body>
</html>
