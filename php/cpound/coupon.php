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
        

           <div class="col-md-10 col-xs-10">
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
                      <th>Coupon Code</th>
                      <th>Landing Pages</th>
                      <th>status</th>
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

   function init(){
      $("#coupon-list").text("");
      getCoupon();
    }
    init();

function getCoupon(){
var formData={
    'action':'getAmazonCode'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {

      var size =data.data.length;
      for(var i = 0 ; i<size;i++){
        var input = data.data[i].code;
        var html =
        '<tr id="'+input+'">'+
'<td><input class="code-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data[i].id+'" ><input class="lp-id-'+input+'" type="hidden" class="form-control" '+
'value="'+data.data[i].landpages_id+'" >'+data.data[i].id+'</td>'+
'<td> <input class="code-'+input+'" type="text" class="form-control" '+
'placeholder="'+input+'"  value ="'+input+'" disabled="true">'+
'</td>'+
'<td> '+data.data[i].title+'</td>'+
'<td> <span id="status-'+input+'">'+data.data[i].status+'</span>  (0: Open, -1:Close, 1:processing)</td>'+
'<td>'+
'<div class="input-group-btn btn-code-edit-'+input+'">'+
'<a onclick="edit(\''+input+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-code-save-'+input+'"  style="display:none;">'+
'<a onclick="save(\''+input+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="del(\''+input+'\')" class="btn btn-block btn-primary btn-sm">Delete</a>'+
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





function del(id){
 updateAmazonCode(id,-1);
 $(".status-"+id).val(-1);
}

function edit(id){
   $(".code-"+id).removeAttr("disabled") 
   $(".btn-code-save-"+id).show();
   $(".btn-code-edit-"+id).hide();
}

function save(id){
  updateAmazonCode(id,0);

}

function delKeyWords(id){
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

function updateAmazonCode (id,status) {  
  var formData={
    'landpages_id':$(".lp-id-"+id).val(),
    'code':$(".code-"+id).val(),
    'status':status,
    'id':$(".code-id-"+id).val(),
    'action':'updateAmazonCode'
  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         init();
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
