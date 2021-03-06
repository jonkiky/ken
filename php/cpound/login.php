<?php
// Start the session
session_start();

 $_SESSION["login"] = false;

 console_log( $_SESSION["login"] );
 function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

// remove all session variables



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Back Office | Log in</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>Back</b>Office</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
          <div class="form-group has-feedback">
            <input type="text" id="uname" class="form-control" placeholder="NetId">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password"  id="pwd" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
    <!--             <label>
                  <input type="checkbox"> Remember Me
                </label> -->
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="button" id="signin" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
      


       <!--  <a href="#">I forgot my password</a><br> -->
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>.
    <script src="plugins/notify.js"></script>
    <script>
      $(function () {
 
        if(getUrlParameter("login")=="false"){
          $.notify("Need to login again","warn");
        }
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        
         $('#signin').click(function(){
            checkUser();
         })


         function checkUser (username,pwd) {
  var formData={
    'username':$('#uname').val(),
    'password':$('#pwd').val(),
    'action':'checkUser'
  }
  $.ajax({
      url : "../index.php",
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
         if(data.code==1){
           $.notify("username or password is incorrect .","warn");
         }else{

     

      
          window.location.href = "landingPages.php?uname="+$('#uname').val();
         }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
       $.notify("username or password is incorrect .","warn");
    }
  });
}


      });

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


    </script>
   
  </body>
</html>
