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
                  <h3 class="box-title">System Setting</h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->

                <div class="box-body no-padding">
              &nbsp;&nbsp;&nbsp;&nbsp; Enalbe Email :
                 <div class="btn-group" data-toggle="btn-toggle">
                      <button type="button" id="enable_email" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                      <button type="button" id="disable_email"  class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
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
var id;

   function init(){
      getEnableEmailStatus();
    }
    init();

function getEnableEmailStatus(){
var formData={
    'action':'getIsEmail'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    { id=data.data[0].id
       $("#enable_email").removeClass("active");
        $("#disable_email").removeClass("active");
      if(data.data[0].is_email==1){
       $("#enable_email").addClass("active");
      }else{
         $("#disable_email").addClass("active");
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });

}

$("#disable_email").click(function  (e) {
  edit(0);
})

$("#enable_email").click(function  (e) {
  edit(1);
})

function edit(isEmail){
  var formData={
    'action':'updateIsEmail',
    'id':id,
    'is_email':isEmail
  }
    $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    { 
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
