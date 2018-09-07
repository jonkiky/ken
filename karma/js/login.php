 <?php
  session_start();
  unset($_SESSION["username"]);
  session_destroy();
  ?>
<!DOCTYPE html>
<!-- saved from url=(0048)http://amzflashdealsmi.com/vip/control/login.php -->
<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="./css/main.css">

    </head>
<body data-gr-c-s-loaded="true">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://amzflashdealsmi.com/vip/control/index.php?tok=xaG3CvcHIT">Control Panel</a>
        </div>
    </div>
</nav>

<div class="container">

<h2>Login</h2>
<div id="login-action">
   
    <input type="hidden" name="action" value="login">
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" id="username" name="username" v-model="userName">
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" class="form-control" id="password" name="password" v-model="password">
    </div>
    <button type="button" class="btn btn-default" v-on:click="submit">Submit</button>

</div>
<footer class="footer">
    <p>©2018</p>
</footer>

</div><!-- /.container -->


<script src="./js/jquery.js"></script>
<script src="./js/moment.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/notify.js"></script>
<script src="./js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script type="text/javascript">


function normalizeData(jsonIn) {
    data = JSON.parse(jsonIn);
    return {
        name: data.Name,
        id: data.PersonalIdentifier
    };
}


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



function init(){
  if(getUrlParameter("status")&&getUrlParameter("status")==="false"){
           //$.notify("Please login first .","warn");
        }
}

init();


var app = new Vue({
  el: '#login-action',
  data:{
    userName:"",
    password:""
  },
  created:function(){
     this.userName ="123"
  },
  methods:{
    submit:function (){
        // ajax to call the api
        var formData={
             'username':$('#username').val(),
             'password':$('#password').val(),
             'action':'login'
          }
          $.ajax({
              url : "php/index.php",
              type: "POST",
              data : formData,
            success: function(data, textStatus, jqXHR)
                {
                   
                     if(data.code==0){
                       window.location.href = "campaigns.php?token="+data.data[0].token+"&uid="+data.data[0].id
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
          }

})


</script>


</body></html>