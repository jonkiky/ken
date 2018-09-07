<!DOCTYPE html>

<html lang="en" class="gr__amzflashdealsmi_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Panel</title>
    <meta name="description" content="">

	<?php include "css.php"; ?>

    </head>
<body data-gr-c-s-loaded="true">
<?php include "header.php"; ?>

<div class="container" id="account">

    <h1>Account Settings</h1>
    <br>


    <table class="table">
        <thead>
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Domain</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span v-text="user.email"></span></td>
            <td><span v-text="user.username"></span></td>
            <td>amzflashdealsmi.com</td>
        </tr>
        </tbody>
    </table>

    <div>
        <input type="hidden" name="action" value="account-edit">

        <div class="form-group">
            <label for="redirect_dest">Redirect Destination URL</label>
            <input type="text" class="form-control" id="redirect_dest" v-model="user.redirect_dest_url">
            <p class="help-block">Enter a URL destination that you would like
                visitors to go to if they have visited a page that does not
                exist within your site.</p>
        </div>

        <div class="form-group">

            <label for="notify_coupons_ran_out">
                <input type="checkbox" id="notify_coupons_ran_out" v-model="user.is_ran_out_val"> Receive
                notification when coupons run out?
            </label><br>
            <p class="help-block">Choose this option if you would like to
                receive an email when the last available coupon in an Offer is
                used.</p>

            <label for="email_coupons_ran_out">Notification Email</label>
            <input type="text" class="form-control" id="email_coupons_ran_out" v-model="user.ran_out_email">

            <div style="margin-top: 10px;">
                <hr>
                <label for="notify_daily_coupons_limit">
                    <input type="checkbox" id="notify_daily_coupons_limit" v-model="user.is_limit_val">
                    Recieve notifications when daily coupon limits are reached?
                </label>
                <p class="help-block">Choose this option if you would like to
                    receive an email when the daily coupon limit is reached for an offer.</p>
                <label for="email_daily_coupons_limit">Notification
                    Email</label>
                <input type="text" class="form-control" id="email_daily_coupons_limit" v-model="user.limit_email">
            </div>

        </div>

        <button class="btn btn-default" @click="submitAccount">Submit</button>

    </div>


<footer class="footer">
    <p>©2018 | Server Time: 2018-03-16 06:31:34</p>
</footer>

</div><!-- /.container -->
<?php include "js.php"; ?>
<script type="text/javascript">
  var app = new Vue({
    el: '#account',
    data: {
      user: {
        is_ran_out_val: false,
        is_limit_val: false
      },
      message:"hello"
    },
    mounted: function () {
      this.getAccountInfo()
    },
    methods: {
      getAccountInfo: function () {
        var formData = {
          'user_id':getUrlParameter("uid"),
          'token':getUrlParameter("token"),
          'action':'getUserById'
        }
        $.ajax({
          url : "php/index.php",
          type: "POST",
          data : formData,
          success: function(data, textStatus, jqXHR) {
            if (data.code == 0) {
              app.user = data.data;
              app.user.is_ran_out_val = app.user.is_ran_out === '1';
              app.user.is_limit_val = app.user.is_limit === '1';
            }else{
              $.notify("No user found .","warn");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText);
            $.notify("get user fails .","warn");
          }
        });
      },
      submitAccount: function () {
        this.user.is_ran_out = this.user.is_ran_out_val ? 1 : 0;
        this.user.is_limit = this.user.is_limit_val ? 1 : 0;
        var formData = {
          'user_id':getUrlParameter("uid"),
          'token':getUrlParameter("token"),
          'user': this.user,
          'action':'editUser'
        }

        $.ajax({
          url : "php/index.php",
          type: "POST",
          data : formData,
          success: function(data, textStatus, jqXHR) {
            if (data.code == 0) {
              app.getAccountInfo();
              $.notify('Account setting success!', 'success');
            }else{
              $.notify("No user found .","warn");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText);
            $.notify("get user fails .","warn");
          }
        });
      }
    }
  });
</script>

</body></html>