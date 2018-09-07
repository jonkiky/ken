<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                            <a class="navbar-brand" id="home_link" href="campaigns.php">HOME</a>
                    </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a id="campaign_link" href="campaigns.php">Campaigns</a></li>
                <li><a href="javascript:void 0">FPF</a></li>
                <li><a href="javascript:void 0">Multi Prod URLs</a></li>
                <li><a href="javascript:void 0">Training</a></li>
                <li><a href="javascript:void 0">Podcast</a></li>
                <li><a href="javascript:void 0" target="_blank">Feature Request</a></li>
                            </ul>
            <span class="pull-right" style="color: #eee">
                <span id="header_user_name"></span>&nbsp; &nbsp;<a href="#" onclick="goToAccount()">account</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                <a href="login.php">Logout</a>
            </span>
        </div><!--/.nav-collapse -->

    </div>
</nav>
<script type="text/javascript">
  function goToAccount () {
    window.location.href = 'account.php?token=' + getUrlParameter('token') + '&uid=' + getUrlParameter("uid");
  }
</script>