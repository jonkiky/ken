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
	<?php  include "script.php"; ?>


	<script type="text/javascript">
	var landpage;
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
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
	}


	getOpenedLangpages();
		});


	</script>

	</body>
</html>

