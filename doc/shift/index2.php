<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shift &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			
			<div class="fh5co-top-menu menu-1 text-center">
				85% Discount
			</div>
			
		</div>
	</nav>
	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-10 col-md-push-2  intro ">
					<h2 class="subtitle">Best Buy Savings
48 verified offers for December, 2016<span class="fh5co-highlight">Made with <i class="icon-heart2"></i> by <a href="http://freehtml5.co">FreeHTML5.co</a> </span></h2>
					<!-- <h2>Shift is a Collection of a Beautiful &amp; Premium Themes.</h2> -->
				</div>
				
			</div>
			<div class="row">
				
				
				
				<div class="col-md-12 text-center animate-box">
					<a class="work btn-detail " >
						<div class="work-grid " id="bimg" style="background-image:url(images/project-9.jpg);">
						<!-- 	<div class="inner">
								<div class="desc">
									<h3>Hand Care</h3>
									<span class="cat">Logo</span>
								</div>
							</div> -->
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-author" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Limited Supply Available</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="author">
					<!-- 	<div class="author-inner animate-box" style="background-image: url(images/person3.jpg);">
						</div>
						<div class="desc animate-box">
						
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					
					<p><a href="#" class="btn-detail btn btn-primary">Crab My Coupon Deal</a></p>
				</div>
			</div>
		</div>
	</div>

		<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016  All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>  Unsplash & Gessato  Edited By <a href="http://www.cyzlu.us/" target="_blank">Jonkiky Chen &hearts; Lu liu</a></small>
					</p>
					
				<!-- 	<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul> -->
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
	
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script type="text/javascript">

	$(function() {
  		
	function display(landpages){
		var size = landpages.data.length;
		// if no opened landpages go to expired page.
		if(size==0)  window.location.href = "http://localhost/shift/about.html";
		var landpage;
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
				console.log(index);
				landpage= landpages.data[index];
			}
		}

			var date = new Date();
 			var minutes = landpage.minute;
 			date.setTime(date.getTime() + (minutes * 60 * 1000));
			
			$.cookie("indexId", landpage.id,{expires: date});

			// change template
			if(landpage.temple=='red'){
				$("#cstyle").attr("href", "css/style.css");
			}
			if(landpage.temple=='green'){
				$("#cstyle").attr("href", "css/style_green.css");
			}

			$(".menu-1").text(landpage.title);
			$(".subtitle").text(landpage.subtitle);
			$("#bimg").css("background-image","url("+landpage.image+")");
			$(".author").text(landpage.detail);

			$(".btn-detail").attr("href", "detail.php?id="+landpage.id);
	}
	function getOpenedLangpages () {
	var formData={
		'action':'getOpenedLangpages',
	}
	$.ajax({
   		url : "http://localhost/php/index.php",
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

