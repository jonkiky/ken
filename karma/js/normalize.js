
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
  },
  methods:{
    submit:function (){
        // ajax to call the api
        var formData={
             'username':this.val(),
             'password':this.val(),
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