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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          
          
          <div class="col-xs-12">

            <div class="box">
           <div class="box-header">
                  <h3 class="box-title">LandingPages  </h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <div class="input-group-btn">
                          <a href="addLandingpages.php" id="btn-add" class="btn btn-block btn-default btn-sm">Create LandingPage</a> 
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody id="landpagesList"><tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                       <th style="width: 80px">Status</th>
                      <th style="width: 100px">Actions</th>
                    </tr>
                              
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

          </div>



         </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <?php include "footer.php"; ?>

 
    </div><!-- ./wrapper -->




    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <script type="text/javascript">

  var landingPages=[];

      var URL = "../index.php";


function display(lps){

  var size = lps.length;
  for(var i = 0 ; i<size;i++){
    landingPages[lps[i].id]=lps[i];
    var flag = "close" ;
    var action = '<a onclick="opened('+lps[i].id+')" class="btn btn-block btn-primary btn-sm">Open</a></div>';
  
    if(lps[i].status==0){
      flag = "open" ;
       action='<a onclick="closed('+lps[i].id+')" class="btn btn-block btn-primary btn-sm">Close</a></div>';
  
    }

    var html = '<tr>'+
   '<td>'+lps[i].id+'</td>'+
    '<td>'+lps[i].title+'</td>'+
   '<td>'+flag+'</td>'+
    '<td>'+
    '<div class="input-group-btn">'+
    '<a href="editLandingpages.php?id='+lps[i].id+'" class="btn btn-block btn-primary btn-sm">Edit</a>'+
    '</div>'+
    '<div class="input-group-btn">'+
    action
     '</td>'+
    '</tr>';
    $("#landpagesList").append(html)

  }
}

function getLangpages () {
  var formData={
    'action':'getLangpages',

  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {

          display(data.data);
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
  }
  getLangpages();



  


  function closed(id){
    var lps = landingPages[id];
    var input =[];
    input["title"]=lps.title;
    input["subtitle"]=lps.subtitle;
    input["abstract"]=lps.abstract;
    input["image"]=lps.image;
    input["detail_title"]=lps.detail_title;
    input["details"]=lps.details;
    input["status"]=-1;
    input["id"]=lps.id;
    input["minute"]=lps.minute;
    input["temple"]=lps.temple;
    updateLandpages (input);
  }


  function opened(id){
    var lps = landingPages[id];
    var input =[];
    input["title"]=lps.title;
    input["subtitle"]=lps.subtitle;
    input["abstract"]=lps.abstract;
    input["image"]=lps.image;
    input["detail_title"]=lps.detail_title;
    input["details"]=lps.details;
    input["status"]=0;
    input["id"]=lps.id;
    input["minute"]=lps.minute;
    input["temple"]=lps.temple;
    updateLandpages (input);

  }

function updateLandpages (input) {
  var formData={
    'action':'updateLandpages',
    'title':input["title"],
    'subtitle':input["subtitle"],
    'abstract':input["abstract"],
    'image':input["image"],
    'detail_title':input["detail_title"],
    'details':input["details"],
    'status':input["status"],
    'id':input["id"],
    'minute':input["minute"]
  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
     window.location.href = "landingPages.php";
          
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
