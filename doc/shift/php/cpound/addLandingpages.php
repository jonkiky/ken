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
          
          <div class="col-md-7 col-xs-6">

                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title" id="LandingPages_title">Create LandingPages</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Title</label>
                      <input id="title" type="text" class="form-control" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label>Sub Title</label>
                      <input id="subtitle"  type="text" class="form-control" placeholder="Enter Sub Title" >
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Abstract</label>
                     <textarea id="editor3" name="editor3" rows="10" cols="80" style="visibility: hidden; display: none;"> 
                    </textarea>
                   
                    </div>
                 
                    <div class="form-group">
                      <form id="target" action="uploadImage.php">
                      <label for="exampleInputFile">Page1's Big Background Picture</label>
                      <input type="file" id="pic">
                      <label id="drop-box"></label>
                      </form>
                    </div>

                    <div class="form-group">
                      <label>Page2 Title</label>
                      <input id="detailtitle"  type="text" class="form-control" placeholder="Enter Sub Title" >
                    </div>

                   

                    <div class="form-group">
                      <label>Hours</label>
                      <input id="minute"  type="text" value="60" class="form-control" placeholder="Enter Minute" >
                    </div>
                    <!-- select -->
                    <div class="form-group">
                      <label>Temple</label>
                      <select id="temple" class="form-control">
                        <option vaule="green">Green </option>
                        <option vaule="red" selected>Red </option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                     
                       <label>Details</label>
                    <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;"> 
                    </textarea>

                </div><!-- /.box-body -->
                  
                  <!--   <div class="form-group">
                      <label>Step Detail Title</label>
                      <input id="step_title"  type="text" class="form-control" placeholder="Enter Sub Title" >
                    </div>

                   <div class="form-group">
                     
                       <label>Step Details</label>
                    <textarea id="editor2" name="editor2" rows="10" cols="80" style="visibility: hidden; display: none;"> 
                    </textarea>

                 </div><!-- /.box-body --> 
              </div>
                <div class="box-footer">
                     <button id="addLP" type="bottom" class="btn btn-primary">Submit</button>
                    <button id="updateLP" type="bottom" style="display:none" class="btn btn-primary">Update</button>
               
                  </div>

                  </div>
         </div>

           <div class="col-md-5 col-xs-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Coupon Code</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      
                      <input type="text"  id="input-code" class="keywords form-control" placeholder="Enter Code">
                    </div>
    
                  </form>
                </div><!-- /.box-body -->
                <div class="box-footer">
                     <button  style="display:none" id="createCode" type="bottom" class="btn btn-primary">Submit</button>
                    </div>
              </div>

          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Coupon Code List</h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody id="coupon-list"><tr>
                      <th style="width: 10px">#</th>
                      <th>Code</th>
                      <th>Status</th>
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
        CKEDITOR.replace('editor3');
       CKEDITOR.replace('editor1');
       // CKEDITOR.replace('editor2');
      
       // upload function ends
  $("#addLP").click(function(){
    if (checkCompleted()) {
        addLandingpages();
        }

  })
   $("#createCode").click(function(){
      if($("#input-code").val()==""){
        $.notify("Coupon code  could not be none .","warn");
      }else{

        addAmazonCode($("#input-code").val());
      }

  })




function addAmazonCode (input) {
  var codes  = input.split(",");
  for(var index in codes){
      addCode(codes[index])
  }
}

function addCode (argument) {
  
  var formData={
    'landpages_id':lpId,
    'code':argument,
    'action':'addAmazonCode'
  }
  $.ajax({
      url :URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
        var html =
        '<tr id="'+argument+'">'+
'<td><input class="code-id-'+argument+'" type="hidden" class="form-control" '+
'value="'+data.data+'" >'+data.data+'</td>'+
'<td> <input class="code-'+argument+'" type="text" class="form-control" '+
'placeholder="'+argument+'" disabled="true">'+
'</td>'+
'<td class="code-status">open</td>'+
'<td>'+
'<div class="input-group-btn btn-code-edit-'+argument+'">'+
'<a onclick="edit(\''+argument+'\')"  class="   btn btn-block btn-primary btn-sm">Edit</a>'+
'</div>'+
'<div class="input-group-btn btn-code-save-'+argument+'"  style="display:none;">'+
'<a onclick="save(\''+argument+'\')" class=" btn btn-block btn-primary btn-sm">Save</a>'+
'</div>'+
'<div class="input-group-btn">'+
'<a onclick="del(\''+argument+'\')" class="btn btn-block btn-primary btn-sm">Close</a>'+
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


function addLandingpages () {
  var formData={
    'action':'addLandpages',
    'title':$("#title").val(),
    'subtitle':$("#subtitle").val(),
    'abstract':CKEDITOR.instances.editor3.getData(),
    'image':uploadedfileName,
    'detail_title':$("#detailtitle").val(),
    'detail_sub_title':$("#step_title").val(),
    'details':CKEDITOR.instances.editor1.getData(),
    // 'steps':CKEDITOR.instances.editor2.getData(),
    'steps':"",
    'status':0,
    'minutes':$("#minute").val(),
    'temple':$( "#temple option:selected" ).text()

  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {

          lpId=data.data;
          changeDisplay();
           $.notify("Create Landing page success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}


function updateLandpages () {
  var formData={
    'action':'updateLandpages',
    'title':$("#title").val(),
    'subtitle':$("#subtitle").val(),
    'abstract':CKEDITOR.instances.editor3.getData(),
    'image':uploadedfileName,
    'detail_title':$("#detailtitle").val(),
    'details':CKEDITOR.instances.editor1.getData(),
    'status':0,
    'minutes':$("#minute").val(),
    'temple':$( "#temple option:selected" ).text(),
    'detail_sub_title':$("#step_title").val(),
    'steps':"",
    'id':lpId
  }
  $.ajax({
      url : URL,
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
  
        $.notify("Update Landing page success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}



  function changeDisplay(){

    $("#addLP").hide();
    $("#updateLP").show();
    $("#createCode").show();
    $("#LandingPages_title").text("Edit Landing Pages");
    
  }




   $("#updateLP").click(function(){
      if(checkCompleted()){
        updateLandpages();
      }

  })

  function checkCompleted(){
    var flag = true;
    if(uploadedfileName==""){
      $.notify("Upload file could not be none .","warn");
      flag = false;
    }
     if($("#title").val()==""){
      $.notify("Title could not be none .","warn");
      flag = false;
    }
     if($("#subtitle").val()==""){
      $.notify("Sub Title could not be none .","warn");
      flag = false;
     }

     if($("#abstract").val()==""){
      $.notify("Abstract could not be none .","warn");
      flag = false;
     }

      if($("#detailtitle").val()==""){
      $.notify("Detail Title could not be none .","warn");
          flag = false;
        }
        if(CKEDITOR.instances.editor1.getData()==""){
        $.notify("Detail  could not be none .","warn");
        flag = false;
     }
     return flag;
  }
  });



function del(id){
 updateAmazonCode(id,-1);
 $("#"+id).hide();

}

function edit(id){
   $(".code-"+id).removeAttr("disabled") 
   $(".btn-code-save-"+id).show();
   $(".btn-code-edit-"+id).hide();
}

function save(id){
  updateAmazonCode(id,0);
}

function updateAmazonCode (id,status) {

  var formData={
    'landpages_id':lpId,
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
         $(".code-"+id).attr("disabled","true");
         $(".btn-code-save-"+id).hide();
         $(".btn-code-edit-"+id).show();
          $.notify("Update Coupon code success .","success");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });
}



  $("#pic").on('change', fileUpload);


  function fileUpload(event){  
    // $("#drop-box").html("<p>"+event.target.value+" uploading...</p>");
    files = event.target.files;
    var data = new FormData();
    var error = 0;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
       
      if(!file.type.match('image.*')) {
           $("#drop-box").html("<p> Images only. Select another file</p>");
          error = 1;
        }else if(file.size > 10485760){
          $("#drop-box").html("<p> Too large Payload. Select another file</p>");
          error = 1;
        }else{
          uploadedfileName = Math.floor((Math.random() * 1000) + 1)+file.name;
          data.append('image', file, file.name);
          data.append('fakename', uploadedfileName);
          
          
          
        }
    }
    if(!error){
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'upload.php', true);
      xhr.send(data);
      xhr.onload = function () {
        if (xhr.status === 200) {
          $("#drop-box").html(
            "<p> File Uploaded. Select more files</p>"+
           "<img src='./upload/"+uploadedfileName
           +"'  style='width:304px;height:228px;'>");


        } else {
          $("#drop-box").html("<p> Error in upload, try again.</p>");
        }
      };
    }
  }
  


    </script>
  </body>
</html>
