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

<div class="container" id="image_upload">

    <h1>Offer - <a v-text="offer_name" href="#" @click="goToOffer"></a></h1>
    <h2>Images</h2>

    <p>Note: Only 4 images will be shown on the sales page. Uploaded images should have equal dimensions, and larger than 387px (e.g. 400px X 400px)</p>

    <div v-if="canUpload">
        <input type="hidden" name="action" value="images-edit">
        <div class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <label for="image">New Image</label>
            <input type="file" id="image" name="image" accept="image/gif,image/jpeg,image/jpg,image/png" ref="image_url" @change="handleImageChange($event)">
            <p class="help-block">Image should be less than 2MB</p>
            <div id="drop-box"></div>
        </div>
        <button type="submit" class="btn btn-default" @click="importImage">Import</button>
    </div>
    <p v-else style="font-size: 18px; color: orange; margin: 15px;">Max images uploaded for this product.</p>
    
    <hr>
    <h3>Current Images</h3>
    <div>
        <input type="hidden" name="action" value="images-delete">
        <table class="table table-striped">
            <tbody>
                <tr v-for="item in cur_images">
                    <td><input type="checkbox" v-model="item.checked" @change="handleImageSelect"></td>
                    <td><img style="width: 50px; height: 50px;" v-bind:src="'./upload/'+item.picture">{{item.picture}}</td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-default" @click="deleteImages">Delete Selected Images</button>
    </div>


<footer class="footer">
    <p>©2018 | Server Time: 2018-03-16 06:31:36</p>
</footer>

</div><!-- /.container -->



<?php include "js.php"; ?>
<script type="text/javascript">

 


  var app = new Vue({
    el: '#image_upload',
    data: {
      token: getUrlParameter('token'),
      offer_id: getUrlParameter('offer_id'),
      offer_name: window.sessionStorage.getItem('offer_name'),
      image_url: '',
      cur_images: [],
      del_images: [],
      canUpload: true
    },
    mounted: function () {
      this.getImages();
    },
    methods: {
      getImages: function () {
        var formData = {
          'token': this.token,
          'offer_id': this.offer_id,
          'action': 'getImagesByOfferId'
        };
        // get images by offer id
        $.ajax({
          url: 'php/index.php',
          type: 'POST',
          data: formData,
          success: function (data, textStatus, jqXHR) {
            if (data.code == 0) {
              app.cur_images = data.data;
              app.canUpload = app.cur_images.length !== 4;
            } else {
              $.notify('get images fails', 'warn');
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText)
            $.notify('username or password is incorrect .', 'warn');
          }
        });
      },
      goToOffer: function () {
        window.location.href = 'offer-edit.php?token=' + this.token + '&uid=' + getUrlParameter('uid') + '&cid=' + getUrlParameter('cid') + '&id=' + this.offer_id;
      },
      handleImageChange: function (e) {
        var files = e.target.files;
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

              app.image_url = uploadedfileName;
            } else {
              $("#drop-box").html("<p> Error in upload, try again.</p>");
            }
          };
        }

      },

      importImage: function () {
         if(this.image_url==""){
           $.notify('No picture selected to upload!', 'warn');
          return 
         }
        var formData = {
          'token': this.token,
          'offer_id': getUrlParameter('offer_id'),
          'image_url': this.image_url,
          'action': 'addImage'
        };
        $.ajax({
          url: 'php/index.php',
          type: 'POST',
          data: formData,
          success: function (data, textStatus, jqXHR) {
            if (data.code == 0) {
              app.getImages();
              $.notify('Add success!', 'success');
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
      deleteImages: function () {
        // delete coupons
        if (this.cur_images.length > 0) {
          var formData = {
            'token': this.token,
            'del_images': this.del_images,
            'action': 'deleteImages'
          };
          $.ajax({
            url: 'php/index.php',
            type: 'POST',
            data: formData,
            success: function (data, textStatus, jqXHR) {
              if (data.code == 0) {
                app.getImages();
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
        }
      },
      handleImageSelect: function () {
        this.del_images = [];
        for (var i in this.cur_images) {
          var item = this.cur_images[i];
          if (item.checked === true ) {
            this.del_images.push(item.id);
          }
        }
      }
    }
  });
</script>


</body></html>