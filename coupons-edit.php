<!DOCTYPE html>
<html lang="en" class="gr__amzflashdealsmi_com">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Panel</title>
    <meta name="description" content="">

    <!-- Latest compiled and minified CSS -->
    <?php include "css.php"; ?>
</head>

<body data-gr-c-s-loaded="true">
<?php include "header.php"; ?>

<div class="container" id="coupons_edit">
    <h1><a v-on:click="goToOfferlist">Offer</a> - <a id="offer_link" v-on:click="goToOffer">{{offer_title}}</a></h1>
    <h2>Add Coupon to this offer</h2>

    <input type="hidden" name="action" value="coupons-edit">
    <div class="form-group">
        <label for="import_coupons">Coupons</label>
        <textarea class="form-control" rows="3" name="import_coupons" id="import_coupons"
                  style="width: 600px;" v-model="coupon_text"></textarea>
        <p class="help-block">Place each coupon code on a single line. Coupon codes should be unique. The number of
            current coupons is <em>{{nof_coupons}}</em>.</p>
    </div>

    <div class="form-group">
        <label for="add_coupons">Add Specific Quantity of Coupons (optional)</label>
        <input type="text" name="add_coupons" id="add_coupons" v-model="spec_quantity">
        <p class="help-block">Enter an amount of coupons to add from the submitted coupons above. Useful if you have
            a large quantity of coupons you're working with, and only want to use a limited amount with this
            specific Offer and let the system determine which are unique e.g. paste complete file of coupons above,
            choose to only import a unique 20 for this Offer. This is optional, leaving blank will import all
            coupons into this Offer.</p>
        <p>{{spec_quantity_msg}}</p>
    </div>
    <button type="submit" class="btn btn-default" v-on:click="importCoupons">Import</button>

    <hr class="style-hr">
    <input type="hidden" name="action" value="coupons-delete">
    <!--  Form Input -->
    <div class="form-group">
        <h4>Current Active Coupons: {{active_coupons}}</h4>
        <div class="panel-body" style="max-height: 400px; overflow-y: auto;">
                            <span v-for="ac_cp in active_coupon_codes">{{ac_cp.coupon_code}}<br/></span>
                        </div>

        <label for="delete_coupons">Delete Quantity of Coupons</label>
        <input type="text" name="delete_coupons" id="delete_coupons" v-model="del_quantity">
        <p class="help-block">Enter an amount of coupons to delete from the collection of current active coupons</p>
        <p>{{del_quantity_msg}}</p>
    </div>
    <button type="submit" class="btn btn-default" v-on:click="deleteCoupons">Delete</button>

    <hr class="style-hr">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <h4>Available Coupons: {{available_coupons}}</h4>
                <a href="#"
                   id="sh-available-coupons">Show/Hide</a>

                <div class="panel panel-default" id="available-coupons-panel">
                        <div class="panel-body" style="max-height: 400px; overflow-y: auto;">
                            <span v-for="av_cp in available_coupon_codes">{{av_cp.coupon_code}}&nbsp;&nbsp;&nbsp;<a href="javascript:void 0" v-on:click="addCouponToOffer(av_cp.id)">Add to this offer</a><br/></span>
                        </div>
                        <!--<div class="panel-footer">
                            <input type="submit" name="edit_coupons" class="btn btn-primary" value="Submit"
                                   v-on:click="submit_coupons">
                            <input type="hidden" name="action" value="coupons-available-edit">
                        </div>-->
                </div>

            </div>
            <div class="col-md-6">
                <h4>Used Coupons: {{used_coupons}}</h4>
                <a 
                   id="sh-used-coupons">Show/Hide</a>
                <div class="panel panel-default" id="used-coupons-panel">
                    <div class="panel-body" style="max-height: 400px; overflow-y: auto;">
                        <span v-for="used_cp in used_coupon_codes">{{used_cp.coupon_code}}<br/></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>©2018 | Server Time: 2018-02-19 06:51:34</p>
    </footer>

</div><!-- /.container -->


<?php include "js.php"; ?>
<script type="text/javascript">
    var app = new Vue({
        el: '#coupons_edit',
        data: {
            token: getUrlParameter('token'),
            offer_id: getUrlParameter('offer_id'),
            offer_title: '',
            coupon_text: '',
            coupons: [],
            nof_coupons: 0,
            spec_quantity: 0,
            spec_quantity_msg: '',
            active_coupons: 0,
            del_quantity: '',
            del_quantity_msg: '',
            available_coupons: 0,
            available_coupon_codes: [],
            used_coupons: 0,
            used_coupon_codes: [],
            active_coupon_codes:[]
        },
        watch: {
            coupon_text: function () {
                this.coupons = this.coupon_text.split('\n');
                for (var i = 0; i <= this.coupon_text.length; i++) {
                    if (this.coupons[i] == "") {
                        this.coupons.splice(i, 1);
                        i = i - 1;
                    }
                }
                this.nof_coupons = this.coupons.length;
                this.spec_quantity = this.coupons.length;
            },
            spec_quantity: function () {
                this.spec_quantity_msg = '';
                if (this.spec_quantity > this.nof_coupons) {
                    this.spec_quantity_msg = 'Attention! The specific quantity of coupons exceeds the current coupons.';
                }

            },
            del_quantity: function () {
                this.del_quantity_msg = '';
                if (this.del_quantity > this.active_coupons) {
                    this.del_quantity_msg = 'Attention! The delete quantity exceeds the current active coupons.';
                }
            }
        },
        created: function () {
           // $('#offer_link').attr('href', 'offers.php?token=' + this.token + '&uid=' + getUrlParameter('uid') + '&id=' + this.offer_id);
            this._initCoupons();
        },
        methods: {
            _initCoupons: function () {
                // data for action getCouponsByOfferId
                var data_offer = {
                    'token': this.token,
                    'offer_id': this.offer_id,
                    'action': 'getCouponsByOfferId'
                };

                // data for action getAvailableCoupons
                var data_available = {
                    'token': this.token,
                    'action': 'getAvailableCoupons'
                }

                // get coupons by offer id
                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: data_offer,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            app.used_coupons = app.active_coupons = 0;
                            app.used_coupon_codes = [];
                             app.active_coupon_codes=[];
                            for (var i in data.data) {
                                if (data.data[i].status === 'used') {
                                    app.used_coupon_codes.push(data.data[i]);
                                    ++app.used_coupons;
                                } else {
                                    ++app.active_coupons;
                                    app.active_coupon_codes.push(data.data[i]);
                                }
                            }
                        } else {
                            $.notify(data.message, 'warn');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        $.notify('username or password is incorrect .', 'warn');
                    }
                });

                // get available coupons
                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: data_available,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            app.available_coupons = 0;
                            app.available_coupon_codes = [];
                            for (var i in data.data) {
                                app.available_coupon_codes.push(data.data[i]);
                                ++app.available_coupons;
                            }
                        } else {
                            $.notify(data.message, 'warn');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        $.notify('username or password is incorrect .', 'warn');
                    }
                });

                 // get offer info 
                var formData={
                    'token':getUrlParameter("token"),
                    'id':this.offer_id,
                    'action':'getOfferById'
                }
                $.ajax({
                  url : "php/index.php",
                  type: "POST",
                  data : formData,
                  success: function(data, textStatus, jqXHR){
                         if(data.code==0){
                            app.offer_title = data.data[0].name;
                         }
                    }
                })

            },
            importCoupons: function () {
                // import coupons
                var formData = {
                    'token': this.token,
                    'offer_id': this.offer_id,
                    'coupons': this.coupons,
                    'spec_quantity': parseInt(this.spec_quantity),
                    'action': 'addCoupons'
                };
                if(parseInt(this.spec_quantity)==0){
                    formData.spec_quantity=app.coupons.length;
                }

                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: formData,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            app.coupon_text = '';
                            app.spec_quantity = '';
                            app._initCoupons();
                            $.notify('Import success!', 'success');
                        } else {
                            $.notify(data.message, 'warn');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        $.notify('username or password is incorrect .', 'warn');
                    }
                });
            },

            addCouponToOffer:function(id){
                var formData = {
                    'token': this.token,
                    'offer_id': this.offer_id,
                    'coupon_id':id, 
                    'action': 'updateCoupon'
                };

                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: formData,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            app.coupon_text = '';
                            app.spec_quantity = '';
                            app._initCoupons();
                            $.notify('Add coupon success!', 'success');
                        } else {
                            $.notify(data.message, 'warn');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                    }
                });

            },
            deleteCoupons: function () {
                // delete coupons
                var formData = {
                    'token': this.token,
                    'offer_id': this.offer_id,
                    'del_quantity': parseInt(this.del_quantity),
                    'action': 'deleteCoupons'
                };
                $.ajax({
                    url: 'php/index.php',
                    type: 'POST',
                    data: formData,
                    success: function (data, textStatus, jqXHR) {
                        if (data.code == 0) {
                            app.del_quantity = '';
                            app._initCoupons();
                            $.notify('Delete success!', 'success');
                        } else {
                            $.notify(data.message, 'warn');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText)
                        $.notify('username or password is incorrect .', 'warn');
                    }
                });
            },
            goToOffer:function(){
                  window.location.href = "offer-edit.php?token="+app.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid")+"&id="+getUrlParameter("offer_id");
            },
            goToOfferlist:function(){
                 window.location.href = "offers.php?token="+app.token+"&uid="+getUrlParameter("uid")+"&cid="+getUrlParameter("cid")+"&id="+getUrlParameter("offer_id");
            }

        }
    });


    $(document).ready(function () {
        $('#sh-available-coupons').click(function (e) {
            e.preventDefault();
            $('#available-coupons-panel').toggle();
        });
        $('#sh-used-coupons').click(function (e) {
            e.preventDefault();
            $('#used-coupons-panel').toggle();
        });
    });
</script>
</body>
</html>