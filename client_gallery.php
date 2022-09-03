<?php
include('admin/config.php');
?>

<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Client Gallery</title>

    <meta name="keywords" content="" />

    <meta name="description" content="">

    <meta name="author" content="">
    <!-- Mobile view -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->

    <link rel="shortcut icon" href="images/logo/logo.png">

    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->

    <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

    <link rel="stylesheet" href="css/theme-default.css" type="text/css">

    <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">

    <link rel="stylesheet" href="css/corporate.css" type="text/css">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />

    <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
    

    <!-- Template's stylesheets END -->

    <!-- Style Customizer's stylesheets -->

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">

   <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->

    <!-- Style Customizer's stylesheets END -->

    <!-- Skin stylesheet -->
    
    
    <style>
        .cal:hover 
        {
    	    width: 45px;
    	    cursor: pointer;
        }
        .cal 
        {
        	border: 2px solid  #226bb4;
        	background: #226bb4;
        	color: #fff;
        	padding: 16px 8px 0 10px;
        	line-height: 50px;
        	font-size: 18px;
        	height: 50px;
        	top: 60%;
        	transition-property: width;
        	overflow: hidden;
        }
        .cal 
        {
        	width: 45px;
        	transition-timing-function: linear;
        	position: fixed;
        	z-index: 9999;
        }
        .eml:hover 
        {
             width: 45px;
    	    cursor: pointer;
        }
        .eml 
        {
        	border:2px solid  #226bb4;
        	background: #226bb4;
        	color: #fff;
        	padding: 16px 8px 0 14px;
        	line-height: 50px;
        	font-size: 18px;
        	height: 50px;
        	top: 68%;
        	transition-property: width;
        	overflow: hidden;
        }
        .eml 
        {
        	width: 45px;
        	transition-timing-function: linear;
        	position: fixed;
        	z-index: 9999;
        }
        .what:hover 
        {
        	width: 45px;
        	cursor: pointer;
        }
        .what 
        {
        	border:2px solid  #226bb4;
        	background: #226bb4;
        	color: #fff;
        	padding: 16px 8px 0 14px;
        	line-height: 50px;
        	font-size: 18px;
        	height: 50px;
        	top: 76%;
        	transition-property: width;
        	overflow: hidden;
        }
        .what 
        {
        	width: 45px;
        	transition-timing-function: linear;
        	position: fixed;
        	z-index: 9999;
        }
        .ins:hover 
        {
        	width: 45px;
        	cursor: pointer;
        }
        .ins 
        {
        	border:2px solid  #226bb4;
        	background: #226bb4;
        	color: #fff;
        	padding: 16px 8px 0 14px;
        	line-height: 50px;
        	font-size: 18px;
        	height: 50px;
        	top: 84%;
        	transition-property: width;
        	overflow: hidden;
        }
        .ins 
        {
        	width: 45px;
        	transition-timing-function: linear;
        	position: fixed;
        	z-index: 9999;
        }
        .phone:hover 
        {
        	width: 45px;
        	cursor: pointer;
        }
        .phone 
        {
        	border:2px solid  #226bb4;
        	background: #226bb4;
        	color: #fff;
        	padding: 16px 8px 0 14px;
        	line-height: 50px;
        	font-size: 18px;
        	height: 50px;
        	top: 92%;
        	transition-property: width;
        	overflow: hidden;
        }
        .phone 
        {
        	width: 45px;
        	transition-timing-function: linear;
        	position: fixed;
        	z-index: 9999;
        }
         .download 
        {
            color: #fff;
            padding: 0 0px 0 0px;
            line-height: 50px;
            font-size: 18px;
            top: 57%;
            transition-property: width;
            overflow: hidden;
        }
        .download 
        {
        	width: 33px;
            transition-timing-function: linear;
            position: fixed;
            z-index: 9999;
            right: 0;
        }


		
		a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
margin: 9px 20px 20px 55px;
}

/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
position: fixed;
top: -100%;
width: 100%;
background: rgba(0,0,0,.7);
width: 100%;
opacity: 0;
z-index: 1;
-webkit-transition: opacity .5s ease-in-out;
-moz-transition: opacity .5s ease-in-out;
-o-transition: opacity .5s ease-in-out;
transition: opacity .5s ease-in-out;
overflow: hidden;
 
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 0%;
max-width: 0%;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
  
}

/* Styles the close link, adds the slide down transition */

.lightbox-close {
display: block;
width:50px;
height:50px;
box-sizing: border-box;
background: white;
color: black;
text-decoration: none;
position: absolute;
top: -80px;
right: 0;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

.lightbox-close:before {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

.lightbox-close:after {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
opacity: 1;
top: 0;
bottom: 0;
left:0;
  overflow:scroll;
}

.lightbox-target:target img {
max-height: 100%;
max-width: 100%;
}



.lightbox-target:target a.lightbox-close {
top:23%;
}

.margin-bottom {
    margin-bottom: 0px;
}

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: initial;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
        
    </style>


</head>


<body>
	<div class="over-loader loader-live">
		<div class="loader">
			<div class="loader-item style4">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
	</div>
	<!--end loading-->

	<div class="wrapper-boxed">
		<div class="site-wrapper">
        <?php include"includes/header.php";?>
			
			<!--end menu-->
			<!--end menu-->

			<div class="clearfix"></div>
			<section class="section-side-image clearfix">
				<div class="img-holder col-md-12 col-sm-12 col-xs-12">
					<div class="background-imgholder" style="background:url(images/img/inner-back.png);">
						<img class="nodisplay-image" src="images/header-inner-4.html" alt="" />
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
							<div class="header-inner less-height">
								<div class="overlay">
									<div class="text text-center">
										<h3 class="uppercase text-white less-mar-1 title">Client Gallery</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class=" clearfix"></div>

			<!--end header inner-->
			<section class="sec-padding" >
			
                        <div class="container" >
					<div class="row" id="g">
                    <?php     
    $sql=mysqli_query($conn,"select * from client_gallery");

    while($arr=mysqli_fetch_array($sql)){
    ?>
						<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom">
						<a class="lightbox" href="#<?php echo $arr['name'] ?>">
							<video src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:250px; width:300px;" ></video></a>

							<div class=" lightbox-target" id="<?php echo $arr['name'] ?>">
                    <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:55%; width:55%;" />
                    <a class="lightbox-close" href="#g"></a>
                    </div>
							<h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>
						</div>
						
						<?php }  ?>
						
						<!--end item-->
					</div>
					
					
			</section>
			<!-- end section -->
			<div class="divider-line solid light"></div>
			

			<!-- end section -->
			<div class="divider-line solid light"></div>
			

			
			<div class="clearfix"></div>
			<!-- end section -->
			
			<!--end section-->

    
    
            <?php include"includes/footer.php";?>
			<div class="clearfix"></div>
			<!-- end section -->

			<a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

		</div>
		<!--end site wrapper-->
	</div>
	<!--end wrapper boxed-->

	<!-- Scripts -->
	<script src="js/jquery/jquery.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/style-customizer/js/spectrum.js"></script>
	<script src="js/less/less.min.js" data-env="development"></script>
	<script src="js/style-customizer/js/style-customizer.js"></script>
	<!-- Scripts END -->

	<!-- Template scripts -->
	<script src="js/megamenu/js/main.js"></script>
	<script src="js/owl-carousel/owl.carousel.js"></script>
	<script src="js/owl-carousel/custom.js"></script>
	<script src="js/jFlickrFeed/jflickrfeed.min.js"></script>
	<script>
		$('#basicuse').jflickrfeed({
			limit: 6,
			qstrings: {
				id: '133294431@N08'
			},
			itemTemplate:
				'<li>' +
				'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
				'</li>'
		});
	</script>
	<script>
		$(window).load(function () {
			setTimeout(function () {

				$('.loader-live').fadeOut();
			}, 1000);
		})

	</script>
	<script src="js/functions/functions.js"></script>

	<!--	<div class="flip animated hinge" style="z-index: 99999; position: fixed;top: 500px;">

		<a
			href="https://api.whatsapp.com/send?phone=917600442211&amp;text=Excellent water technology is a leading Water Solution Company "><img
				src="images/whatsapp-icon.png" style="width:50px;"></a><a>
		</a></div>-->
		
		
		<!--<div class="cal">
        	 <a style="color: #fff;" href="https://www.youtube.com/watch?v=nA77R9WJmkQ&feature=youtu.be" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="eml">
        	 <a style="color: #fff;" href="https://www.facebook.com/KashyapAntiScaleSystem/" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
         <div class="ins">
        	 <a style="color: #fff;" href="https://www.instagram.com/kashyap_antiscale_system/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="what">
        	 <a style="color: #fff;" href="https://api.whatsapp.com/send?phone=917600442211&amp;text=Excellent water technology is a leading Water Solution Company" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </div>
        <div class="phone">
        	 <a style="color: #fff;" href="tel:+917600442211" target="_blank"><i class="fa fa-phone"></i></a>
        </div>-->
        <!-- <div class="download">
        	 <a style="color: #fff;" href="download-catalogue.html"><img src="images/download-catalogue.png"></a>
        </div> -->
	
<!-- Global site tag (gtag.js) - Google Ads: 10885534940 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10885534940"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10885534940');
</script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85600731-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85600731-1');
</script>

</body>


</html>