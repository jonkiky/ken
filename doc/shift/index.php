<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Incredible Amazon.com one-day only deal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<?php  include "head.php"; ?>
	</head>
	<body>
	<div id="limited">
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			
			<div id="sub-title"class="fh5co-top-menu  text-center" style="color:#fff;">
				<h2 >85% DISCOUNT</h2>
			</div>
			
		</div>
	</nav>
	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line ">
				<div class="col-md-10 col-md-push-1  intro text-center">
					<h3  id="title">BUY THIS Top Rated Bluetooth Speaker On Amazon for 85% OFF!</h3>
					
				</div>
				
			</div>
			<div class="row">
				
				
				
				<div class="col-md-12 text-center ">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid"  id="pic" style="background-image:url(images/project-9.jpg);">
							
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-author" class="fh5co-bg-section">
		<div class="container">
			<div class="row " id="fh5co-started" >
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">

					<h2 style="color:#fff;">Limited Supply Available </h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<div class="author" id="abstract">
						
						
							This is a special Amazon coupon deal to promote this popular new product. Grab this for only $4.99 which is an incredible 85% OFF! This is a one-time only opportunity that won’t last long!
All order are placed right through Amazon, so you are assured a smooth transaction. You will use a unique coupon ode that will be provided to you on the next page. 

							<br>
<b>ONLY 16 COUPONS LEFT<b>
	<ul>
		<li>
	Normally $29.99. Only $4.99 now!
		</li>
			<li>
	Free Shipping
		</li>
			<li>
	Expires Midnight Tonight
		</li>

	</ul>




					</div>
				</div>
				<div class="col-md-2  " >
					<img src="images/download.png">
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-author" class="fh5co-bg-section">
		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h3 id="number_coupon">Only 16 Left</h3>
					<p ><a  id="link_detail" href="detail.html" class="btn btn-primary">Grab My Coupon Deal</a></p>
				</div>
			</div>
		</div>
	</div>

	<?php  include "foot.php"; ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	</div>

	<div id="myModal" class="modal  fade " tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
      	    <div class="row">
      	    	 <div class="col-md-4">
      	    	 	
      	    	 	<img src="images/coupon.jpg" class="img-responsive" >
      	    	 </div>
      	    	 <div class="col-md-8">

      	    	 	      <div class="row">
          <div class="col-md-12"><h3>Want to get coupon by email ?</h3></div>
        </div>
        <div class="row">
          <div class="col-md-4">
   					<input type="text" id="first-name"  class="form-control" id="exampleInputEmail1" placeholder="First Name">
          </div>
            <div class="col-md-4">
   					<input type="text" id="last-name"   class="form-control" id="exampleInputEmail1" placeholder="Last Name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
   					<input type="email" id="email"  class="form-control" id="exampleInputEmail1" placeholder="Your email address">
          </div>

        </div>
       
        <div class="row">
          <div class="col-md-12">

            <button type="button" id="btn-send-coupon" class="btn btn-primary">Send me the coupon </button><button id="btn-no-send" type="button" class="btn btn-default">No Thanks</button>
          </div>
           
        </div>
      	    	 </div>

      	    </div>
  
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<?php  include "script.php"; ?>


	<script type="text/javascript">
	var landpage;
	var couponCode ;
 	var keyword ;
	$(function() {
  		
	function display(landpages){
		var size = landpages.data.length;
		// if no opened landpages go to expired page.
		if(size==0)  window.location.href = "expired.html";
		
		if($.cookie("indexId")){
			// not first time login 
			var flag = false;
			for(var i = 0 ;i <size ;i++){
  					if(landpages.data[i].id ==$.cookie("indexId") ){
  						landpage=landpages.data[i];
  						flag=true;
  					}
			 };
			// if not found landpage
			if(!flag){
				if(size==1) {
					landpage= landpages.data[0];
				} 
				else
				{
					var index = Math.round(Math.random() * (size-1));
					landpage= landpages.data[index];
					console.log("landpages-index :"+index)
				}
			}


		}else{
			// first time login 
			if(size==1) {
				landpage= landpages.data[0];
			} 
			else
			{
				var index = Math.round(Math.random() * (size-1));
				landpage= landpages.data[index];
			}
		}

			var date = new Date();
 			var minutes = landpage.minute;
 			date.setTime(date.getTime() + (minutes * 60 * 1000));
			
			// set cookie and its time for expired.
			$.cookie("indexId", landpage.id,{expires: date});

			// change template
			if(landpage.temple.trim()=='Red'){
				$("#cstyle").attr("href", "css/style_small.css");
			}
			if(landpage.temple.trim()=='Green'){
				$("#cstyle").attr("href", "css/style_small_green.css");
			}


			// title 1
			$("#sub-title").text(landpage.subtitle);
			// title 2
			$("#title").text(landpage.title);
			$("#pic").css("background-image","url(php/cpound/upload/"+landpage.image+")");
			$("#abstract").text(landpage.abstract);
			
			$(".work").attr("href", "detail.php?id="+landpage.id);
			$("#link_detail").attr("href", "detail.php?id="+landpage.id);
	}
	

	 var formData={
								'action':'getOpenedAmazonCodeByLangpagesId',
								'id':landpage
							}
							$.ajax({
						   		url : "php/index.php",
						    	type: "POST",
						    	data : formData,
						    success: function(data, textStatus, jqXHR)
						    {			
						    		numberofcoupon=0
						       		if(data.data.length>0){
						       			numberofcoupon = data.data.length + Math.round(Math.random() * (10-1));
						       		}
						       		$("#number_coupon").text("Only "+numberofcoupon+" Coupon Left");

						    },
						    error: function (jqXHR, textStatus, errorThrown)
						    {
						 			console.log(textStatus)
						    }
							});


	function getOpenedLangpages () {
	var formData={
		'action':'getOpenedLangpages',
	}
	$.ajax({
   		url : "php/index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("checkUser:  ")
       		console.log(data)
       		display(data);
       		getCouponCode();
       		getKeywords()
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
	}


	getOpenedLangpages();





			function getCouponCode () {

					 var formData={
								'action':'getOpenedAmazonCodeByLangpagesId',
								'id':landpage.id
							}
							$.ajax({
						   		url : "php/index.php",
						    	type: "POST",
						    	data : formData,
						    success: function(data, textStatus, jqXHR)
						    {			

						       		if(data.data.length>0){
						       			couponCode = data.data[0].code;			
						       			
						       		}
						       					

						    },
						    error: function (jqXHR, textStatus, errorThrown)
						    {
						 			console.log(textStatus)
						    }
							});

				}


				function getKeywords () {


				var formData={
								'action':'getKeyWords'
							}
							$.ajax({
						   		url : "php/index.php",
						    	type: "POST",
						    	data : formData,
						    success: function(data, textStatus, jqXHR)
						    {			

						       		if(data.data.length>0){
						       			
						       			var size=data.data.length;
						       			var index = Math.round(Math.random() * (size-1));
										var keyword= data.data[index].keywords;
										console.log("keyword:"+keyword);
										 return link (keyword) 
										}
						    },	
						    error: function (jqXHR, textStatus, errorThrown)
						    {
						 			console.log(textStatus)
						    }
							});


					


			}

			function link (word) {
						var formData2={
												    'action':'getURL'
												  }
												  $.ajax({
												     	url : "php/index.php",
												      type: "POST",
												      data : formData2,
												    success: function(data, textStatus, jqXHR)
												    {		var size=data.data.length;
						       								var index = Math.round(Math.random() * (size-1));
														var url= data.data[index].url;
														console.log(url);
												    	keyword=url+word
														
												    }})
										
						       		

			}		





$(document).on('click','#link_detail',function(e){
	e.preventDefault();
var formData={
    'action':'getIsEmail'
  }
  $.ajax({
     	url : "php/index.php",
      type: "POST",
      data : formData,
    success: function(data, textStatus, jqXHR)
    {
      if(data.data[0].is_email==1){
      
      showsEmail();
       return false;

      }else{
          location.href = $("#link_detail").attr("href");
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      console.log(textStatus)
    }
  });

});
 function showsEmail(){
 $('#myModal').modal('toggle')
}

$("#btn-send-coupon").click(function(){
		console.log(couponCode);
		console.log(keyword);
		var fname= $("#first-name").val();
		var lname=$("#last-name").val();
		var email=$("#email").val();
		email="Jonkiky@gmail.com";
		message="Hello Yizhen Chen,<br> this is test message. <br>Try link : http://www.google.com";
		title="Try Customer Services";
	var formData={
			'email':email,
			'message':message,
			'title':title
		}

	$.ajax({
			   		url : "http://localhost:8080/IIUS/util/ext_sendEmail",
			    	type: "POST",
			    	data : formData,
			    success: function(data, textStatus, jqXHR)
			    {
			       	console.log("email send")
			       		
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 			console.log("send email  fails")
			    }
				})
	
			var formData2={
			'action':'email',
			'email':email,
			'message':message,
			'lname':lname,
			'fname':fname
		}
	$.ajax({
			   		url : "php/index.php",
			    	type: "POST",
			    	data : formData2,
			    success: function(data, textStatus, jqXHR)
			    {
			       	console.log("email send")
			       		
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 			console.log("send email  fails")
			    }
				})




		$('#myModal').modal('toggle')
})



$("#btn-no-send").click(function(){
	 $('#myModal').modal('toggle')
})
		});


	</script>

	</body>
</html>

