<?php
include('admin/config.php');
?>

<!DOCTYPE html>
<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Shree Sudarshan Water Conditioner</title>

    <meta name="keywords" content="Sudarshan Anti Scale System" />

    <meta name="description" content="Sudarshan Anti Scale System">

    <meta name="author" content="">
    <!-- Mobile view -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->

    <link rel="shortcut icon" href="images/logo/wlogo.png">

    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">
    <!-- Google fonts  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

    <link rel="stylesheet" href="css/theme-default.css" type="text/css">

    <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">

    <link rel="stylesheet" href="css/transport.css" type="text/css">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />

    <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">

    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- Style Customizer's stylesheets -->

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src='../www.google.com/recaptcha/api.js'></script>

    <!-- Style Customizer's stylesheets END -->
    
    
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
        	padding: 0 8px 0 10px;
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
        	padding: 0 8px 0 14px;
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
        	padding: 0 8px 0 14px;
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
        	padding: 0 8px 0 14px;
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
        	padding: 0 8px 0 14px;
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

        /* @media only screen and (max-width: 991px)
.pdf{
    margin-bottom: 30px;
} */

/*Eliminates padding, centers the thumbnail */


/* Styles the thumbnail */

a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
margin: 15px 20px 20px 20px;
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

    <!-- Style customizer END -->

   
    <?php include"includes/header.php";?>
    <div class="clearfix"></div>

    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="container-fluid">
                    <div class="row">
						<div class="col-md-12">
							<div class="header-inner " style="height:100px; width:100%">
								<div class="overlay">
									<div>
										<h4 class="uppercase text-white less-mar-1 title " style="text-align:center; margin-top:40px;">Total solution of scale & Hard water..</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
                    </div>
    <div class="container-fluid">
	
                    <div class="row">
            <div class="col-md-12">
           
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="images/sliders/chakra.jpeg" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/chakra.jpeg" class="mobile-slide">
                        
                    </div>
                    

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="images/sliders/indeximg.jpeg" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/indeximg.jpeg" class="mobile-slide">
                       
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="images/sliders/agri.jpeg" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/agri.jpeg" class="mobile-slide">
                        
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="images/sliders/indeximg2.jpeg" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/indeximg2.jpeg" class="mobile-slide">
                        
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>

            </div>

        </div>

    </div>
    <!-- END OF SLIDER WRAPPER -->
   <br>
<section>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <img src="images/sliders/1img.jpeg" alt="" style="height:150px;">
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <img src="images/sliders/2img.jpeg" alt="" style="height:150px;">
							
						</div>
                       
						<div class="col-md-3 col-sm- col-xs-12 margin-bottom">
                        <img src="images/sliders/4img.jpeg" alt="" style="height:150px; ">
						
						</div>
                      
						<div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <img src="images/sliders/6img.png" alt="" style="height:150px; ">
							
						</div>
						<!--end item-->
					</div>
				

				</div>
			</section>
    <section class="sec-padding">

        <div class="container">

            <div class="row">

                
                <div style="margin: 0% 0px 0px; height:500%;" class="col-md-5 col-sm-6 col-xs-12 margin-bottom"> 
					<video width="100%" height="300" src="images/sliders/index.mp4" type="video/mp4" frameborder="0" controls="" ></video>
					<!--<img src="images/img/homepage_why.png" alt="" class="img-responsive pt-5">-->
                </div>
                <!--end item-->

                <div class="col-md-7">

                    <div class="col-md-10">

                        <div class="col-xs-12 nopadding">

                            <div class="sec-title-container less-padding-5 text-left">
                            <h3 class="uppercase font-weight-7 less-mar-1">Welcome to Sudarshan Technology

</h3>
                                <h6 class="uppercase font-weight-3 less-mar-1 text-gyellow">INDIA'S Leading anti-scale systems

								</h6>

                               

                                <div class="tp-title-line-1 align-left"></div>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <!--end title-->

                        <p style="text-align: justify;">Shree Sudarshan Brand in water conditioner & treatment is well known in India, in past 10 years we have achieved Big highs  mainly in Agriculture and Domestic segments! With Electro-Magnet technology our successes rate is over 90% since last 10 years!

</p>
<p style="text-align: justify;">Now as per the demand and requirements of New Era, our Highly skilled technical and research team has Developed a new Advanced, Effective and Unique 
" Capacitance IMPULSE technology"</p>
                        <br />

                        <!--end item-->

                        <div class="clearfix"></div>

                        <br />

                        <br />

                        <a class="btn btn-dark-3 btn-medium uppercase" href="about.php">Read more</a>

                    </div>

                </div>

                <!--end item-->

            </div>

        </div>

    </section>

    <div class="clearfix"></div>

    <!-- end section -->
    <section class="sec-padding tp-sec-bg ">

        <div class="container">

            <div class="row">

             
                <!--end item-->

                <div class="col-md-7 padding-left-5">

                    <div class="col-xs-12 nopadding">

                        <div class="sec-title-container text-left pb-0">

                            <!-- <h6 class="uppercase font-weight-3 less-mar-1 text-gyellow">Why Excellent Water Solutions?

							</h6> -->

                            <h3 class="uppercase font-weight-7 less-mar-1">HOW SHREE SUDARSHAN WATER CONDITIONER WORKS</h3>

                            <div class="tp-title-line-1 align-left"></div>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                    <!--end title-->

                    <p style="text-align: justify;">New Sudarshan capacitance impulse technology releases...programmed complexed module line High electronic frequency through copper cable coil winding on pipes.
This capacitance impulse frequency effectively change & prevent different size of water molecules likely to form scale, impulse frequency same time breaks the  Hydrogen Bond between opposite water molecules, this Results breakdown of large minerals crystals into tiny minerals particles and flush them away along with water in due course of time...


</p>

                    <!-- end item-->
                    <br />

<br />

                    <a class="btn btn-dark-3 btn-medium uppercase" href="howitworks.php">Read more</a>

                        <!-- end feature box-->

                    </div>

                    <!-- end item-->

                    
                    <!-- end item-->

                    

                    <!-- end item-->
                    <div class="col-md-5"> <img src="images/sliders/img.jpg" alt="" class="img-responsive" /> </div>

                </div>

                <!--end item-->

            </div>

        </div>

    </section>

    <div class="clearfix"></div>

    <!-- end section -->

   

    <div class="clearfix"></div>


    <section class="sec-padding">
        <div class="container">
            <div class="row">

               

                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:-19px;"> 
					<img src="images/sliders/agri.jpeg" alt="" class="img-responsive" />
                    <h4 ><b>Capacitance Impulse 4 Stage Model</b> </h4>
                    <p>(Design applied for patent)</p>
                </div>

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="col-divider-margin-3"></div>
                    <div class="divider-line solid light"></div>
                    <div class="col-divider-margin-3"></div>
                    <h3 class="nopadding font-weight-4">Agriculture Application</h3>
                    <div class="tp-title-line"></div>
                    <div class="clearfix"></div>
                    
                    <p style="text-align: justify;"> Hard water from a bore (well) typically has very high surface tension. This water is difficult to be taken up into the plant stem and absorbed into the cell structure. and If it is hard water then it becomes more difficult to be taken up by plant. It is not well absorbed and the result is the plant growth becomes slower.</p>
                    <p style="text-align: justify;">It is known that there are thousands of CELL MEMBRANES found on the roots of plants , trees and crops, which keeps the plant alive, healthy. Bacteria free and fast growing if the cell membranes are active energized and magnetized , they help plant to intake required mineral, nutrients,…</p>
                    <div class="clearfix"></div>
                    <br />
                    <a class="btn btn-dark-3 btn-medium uppercase" href="Agriculture-app.php">Read more</a>
                </div>
                <!--<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom">
                    <div class="tp-feature-box-3 margin-bottom">
						<?php #include('form.php'); ?>
						<?php #if(!empty($response)) {?>
						<div class="form-group col-12 text-center">
						  <div class="alert text-center <?php #echo $response['status']; ?>">
							<?php #echo $response['message']; ?>
						  </div>
						</div>
						<?php #}?>
                        <form action="" name="contactForm" id="contactForm" method="post" enctype="multipart/form-data">
                            <input class="input" type="text" name="name" id="name" placeholder="Enter Name" required>
                            <input class="input" type="email" name="email" id="email" placeholder="Email Address" required>
                            <input class="input" type="text" name="mobile" id="mobile" placeholder="Enter Telephone" required>
                            <input class="input" type="text" name="city" id="city" placeholder="Enter City">
                            <select name="services" id="services" required>
                                <option value="">Choose Service</option>
                                <option value="I want dealership">I want dealership</option>
                                <option value="Residential Installation">Residential Installation</option>
                                <option value="Commercial Installation">Commercial Installation</option>
                                <option value="Industrial Installation">Industrial Installation</option>
                                <option value="Other">Other</option>
                            </select>
                            <textarea class="textarea" name="message" id="message" placeholder="Enter Message"></textarea>
							<div class="form-group">
								<div class="g-recaptcha" data-sitekey="6Lesla0aAAAAAGPZrOx8eExL9j7jiAv0c9aQQ2ml"></div>
							</div>
                            <div class="pt-1">
                                <button class="btn btn-gyellow-2 less-padding uppercase" type="submit" name="send">Submit Quote
                                </button>
                            </div>
                        </form>
                    </div>
                </div>-->

            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section >
    <div class="text text-center"  id="gallery">
										<h3 class="uppercase text-white less-mar-1 title" style="color:black; padding:20px;"><b>PRODUCT GALLERY</b></h3>
									</div>
            
                <div class="container">
            <div class="row">
            <?php     
$sql=mysqli_query($conn,"select * from product_gallery limit 4");

while($arr=mysqli_fetch_array($sql)){
?>
           
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom" >
                <a class="lightbox" href="#<?php echo $arr['name'] ?>">
            <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:250px; width:250px;" />
            </a> 
            <div class=" lightbox-target" id="<?php echo $arr['name'] ?>">
                    <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:55%; width:55%;" />
                    <a class="lightbox-close" href="#gallery"></a>
                    </div>
                    
                    <h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>
                </div>

                
                <?php }  ?>
                
                <!--end item-->
            </div>
            

            


            
    </section>
    <section class="sec-padding">
    <div class="text text-center" id="gal" >
										<h3 class="uppercase text-white less-mar-1 title" style="color:black;padding:20px;"><b> GALLERY</b></h3>
									</div>
            
                        <div class="container">
					<div class="row">
                    <?php     
    $sql=mysqli_query($conn,"select * from gallery limit 4");

    while($arr=mysqli_fetch_array($sql)){
    ?>
						<div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <a class="lightbox" href="#<?php echo $arr['name'] ?>">
							<img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:250px; width:250px;" /></a>
                            <div class="lightbox-target" id="<?php echo $arr['name'] ?>">
                    <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive" style="height:55%; width:55%;" />
                    <a class="lightbox-close" href="#gal"></a>
                    </div>
							<h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>
						</div>
						
						<?php }  ?>
						
						<!--end item-->
					</div>
					
					
			</section>

            <section class="sec-padding tp-sec-bg ">

<div class="container">

    <div class="row">

       <div style="margin: 12% 0px 0px; " class="col-md-5 col-sm-6 col-xs-12 margin-bottom"> 
       <video width="100%" height="300" src="images/sliders/Sudarshan Compressed.mp4" type="video/mp4" frameborder="0" controls="" ></video>
            <!--<img src="images/img/homepage_why.png" alt="" class="img-responsive pt-5">-->
        </div>

        <!--end item-->

        <div class="col-md-7 padding-left-5">

            <div class="col-xs-12 nopadding">

                <div class="sec-title-container text-left pb-0">

                    <h6 class="uppercase font-weight-3 less-mar-1 text-gyellow">Why Sudarshan Water Solutions?

                    </h6>

                    <h3 class="uppercase font-weight-7 less-mar-1">Why Choose Us</h3>

                    <div class="tp-title-line-1 align-left"></div>

                </div>

            </div>

            <div class="clearfix"></div>

            <!--end title-->

            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="tp-feature-box-2 margin-bottom">

                    <div class="text-box-right less-padding-2">

                        <img src="images/img/homepage/maintenance-free.png" alt="" class="img-responsive pb-5 p-5">

                        <h4 class="uppercase title font-weight-5 nopadding">Maintenance-free

                        </h4>

                    </div>

                </div>

                <!-- end feature box-->

            </div>

            <!-- end item-->

            <div class="col-md-6">

                <div class="tp-feature-box-2 margin-bottom">

                    <div class="text-box-right less-padding-2">

                        <img src="images/img/homepage/ecofriendly.png" alt="" class="img-responsive pb-5 p-5">

                        <h4 class="uppercase title font-weight-5 nopadding">100% Eco-friendly

                        </h4>

                    </div>

                </div>

                <!-- end feature box-->

            </div>

            <!-- end item-->

            <div class="clearfix"></div>

            <div class="col-divider-margin-5"></div>

            <div class="col-md-6">

                <div class="tp-feature-box-2 margin-bottom">

                    <div class="text-box-right less-padding-2">

                        <img src="images/img/homepage/chemical-free.png" alt="" class="img-responsive pb-5 p-5">

                        <h4 class="uppercase title font-weight-5 n

                        opadding">No Chemicals,No Salts, & No Magnetism

                        </h4>

                    </div>

                </div>

                <!-- end feature box-->

            </div>

            <!-- end item-->

            <div class="col-md-6">

                <div class="tp-feature-box-2 margin-bottom">

                    <div class="text-box-right less-padding-2">

                        <img src="images/img/homepage/efficient.png" alt="" class="img-responsive pb-5 p-5">

                        <h4 class="uppercase title font-weight-5 nopadding">Efficient for All Pipes </h4>

                    </div>

                </div>

                <!-- end feature box-->

            </div>

            <!-- end item-->

        </div>

        <!--end item-->

    </div>

</div>

</section>

<div class="clearfix"></div>

<!-- end section -->

<section class="parallax-49">

<div class="container-fluid nopadding">

    <div class="parallax-overlay bg-opacity-8">

        <div class="container sec-tpadding-3 sec-bpadding-3">

            <div class="row">

                <div class="col-md-8 col-centered text-center">

                    <h3 class="uppercase text-white font-weight-6">How is Sudarshan Anti Scale System Different?

                    </h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6 text-center ">

                    <img src="images/img/homepage/dif1.jpeg" class="img-responsive">

                    <h5 class="uppercase text-white raleway">

                        Electromagnetic Water Conditioner Vs. Sudarshan Anti Scale System

                    </h5>

                    <br />

                    <a class="btn btn-gyellow-2 uppercase" data-toggle="modal" data-target="#myModal">Compare</a>

                </div>

                <div class="col-md-6 text-center pt-m-1">

                    <img src="images/img/homepage/dif.jpeg" class="img-responsive w-100">

                    <h5 class="uppercase text-white raleway">Water Softeners Vs. Sudarshan Anti Scale System </h5>

                    <br />

                    <a class="btn btn-gyellow-2 uppercase" href="#" data-toggle="modal" data-target="#diff2">Compare</a>

                </div>

            </div>

        </div>

    </div>

</div>

</section>
    <!--

	<section class="parallax-50">

		<div class="container-fluid nopadding">

			<div class="parallax-overlay light">

				<div class="container sec-tpadding-2 sec-bpadding-2">

					<div class="row">

						<div class="col-xs-12 nopadding">

							<div class="sec-title-container text-center">

								<h6 class="uppercase font-weight-3 less-mar-1 text-gyellow">Latest News</h6>

								<h3 class="uppercase font-weight-7 less-mar-1">OFrom The Blog</h3>

								<div class="tp-title-line-1"></div>

							</div>

						</div>

						<div class="clearfix"></div>

						<div class="col-md-4 col-sm-6 col-xs-12">

							<div class="tp-feature-box-4 margin-bottom"> <img src="images/tp-9.jpg" alt=""
									class="img-responsive" />

								<div class="text-box text-left">

									<div class="inner-box">

										<h5 class="uppercase less-mar-1 title"><a href="#">Cargo Services</a></h5>

										<div class="title-line"></div>

										<div class="clearfix"></div>

										<br />

										<p>Consectetuer adipiscing elit sit et justo Suspendisse et justo. </p>

									</div>

								</div>

							</div>

						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">

							<div class="tp-feature-box-4 active margin-bottom"> <img src="images/tp-10.jpg" alt=""
									class="img-responsive" />

								<div class="text-box text-left">

									<div class="inner-box">

										<h5 class="uppercase less-mar-1 title"><a href="#">Shipment Services</a></h5>

										<div class="title-line"></div>

										<div class="clearfix"></div>

										<br />

										<p>Consectetuer adipiscing elit sit et justo Suspendisse et justo. </p>

									</div>

								</div>

							</div>

						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">

							<div class="tp-feature-box-4 margin-bottom"> <img src="images/tp-11.jpg" alt=""
									class="img-responsive" />

								<div class="text-box text-left">

									<div class="inner-box">

										<h5 class="uppercase less-mar-1 title"><a href="#">Heavy Transport</a></h5>

										<div class="title-line"></div>

										<div class="clearfix"></div>

										<br />

										<p>Consectetuer adipiscing elit sit et justo Suspendisse et justo. </p>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<div class="clearfix"></div>

	<!--end section-->


    
    
    <section >
    <div class="text text-center" style="margin-bottom:30px;" >
										<h3 class="uppercase text-white less-mar-1 title" style="color:black; padding:20px;"><b>BROCHURES</b></h3>
                                        <h6 class="uppercase font-weight-3 less-mar-1 text-gyellow">Download our brochures in various other languages.

</h6>
									</div>
            
                <div class="container" id="btn">
            <div class="row">
            
                <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom" style="display:flex;justify-content: center; ">
                <a class="btn btn-dark-3 btn-medium uppercase pdf" href="images/sliders/english-brochure.pdf"  target="_blank"><i
                        class="fa fa-download"></i>&nbsp;&nbsp;Digital Card</a></div>
                
                <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom" style="display:flex;justify-content: center; float:right;">

                <a class="btn btn-dark-3 btn-medium uppercase pdf" href="images/sliders/Brochure.pdf"target="_blank"><i
                        class="fa fa-download"></i>&nbsp;&nbsp;For Download</a></div>
                    <h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>

               
                <!--end item-->
            </div>
            </div>
            
            
    </section>
    
   

    <div class="clearfix"></div>

    <!-- end section -
 -->
    

    <div class="clearfix"></div>
    
    
    
   <!-- <section class="sec-padding">

        <div class="container">

            <div class="row">

              <div class="col-md-5">
                </div>

                <div class="col-md-3">
                        <a class="btn btn-border dark uppercase" href="http://shop.excellentwater.in/">Buy Now</a>
                </div>
<div class="col-md-4">
                </div>
              
            </div>

        </div>

    </section>-->

    <div class="clearfix"></div>

    <!-- end section -->

   
    <a href="#" class="scrollup"></a>
    <!-- end scroll to top of the page-->

    </div>

    <!--end site wrapper-->

    </div>
    <?php include"includes/footer.php";?>
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
    <script src="js/parallax/jquery.parallax-1.1.3.js"></script>
    <script>
        $(window).load(function() {

            setTimeout(function() {
                $('.loader-live').fadeOut();

            }, 1000);

        })
    </script>
    <script src="js/functions/functions.js"></script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";

        }
    </script>

    <!-- Modal -->

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Electromagnetic Water Conditioner Vs. Sudarshan Anti Scale System</h4>
                </div>

                <div class="modal-body">
                    <p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 50%;">ELECTROMAGNETIC</th>
                                    <th>Sudarshan – anti scale system</th>
                                </tr>
                                <tr>
                                    <td>It works on fixed frequency band</td>
                                    <td>Works on wide range of frequency 3-32 KHz</td>
                                </tr>
                                <tr>
                                    <td>It works only on plastic pipes</td>
                                    <td>It works on any pipe material</td>
                                </tr>
                                <tr>
                                    <td>Effects last for 24 to 48 hours</td>
                                    <td>Effects last for 5 to 7 days</td>
                                </tr>
                                <tr>
                                    <td>Limited effects - nears the wire only</td>
                                    <td>Impulse go upto 1 km </td>
                                </tr>
                                <tr>
                                    <td>It has two wires one coming from the unit and one goes back to the unit, it creates a loop.</td>
                                    <td>Only single wire emerges from the unit and goes to the pipe. No close loop formation.</td>
                                </tr>
                                <tr>
                                    <td>It works on induction</td>
                                    <td>It works on impulse </td>
                                </tr>
                                <tr>
                                    <td>It depends on velocity of water </td>
                                    <td>Impulse works independently</td>
                                </tr>
                                <tr>
                                    <td>Non-consistent effect</td>
                                    <td>Consistent and uniform effect</td>
                                </tr>
                                <tr>
                                    <td>Limited model size available</td>
                                    <td>Model size upto 40” Pipe Diameter & customized model can be designed</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="diff2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Water Softeners Vs. Sudarshan Anti Scale System</h4>
                </div>

                <div class="modal-body">
                    <p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 50%;">Water Softner</th>
                                    <th>
                                    Sudarshan – anti scale system
                                    </th>
                                </tr>
                                <tr>
                                    <td>Expensive and need maintenance </td>
                                    <td>Economical and no maintenance</td>
                                </tr>
                                <tr>
                                    <td>Required daily operation</td>
                                    <td>No operation</td>
                                </tr>
                                <tr>
                                    <td>5 years resin life</td>
                                    <td>5 years replacement warranty & 20 years product life</td>
                                </tr>
                                <tr>
                                    <td>Need more space </td>
                                    <td>It can be installed anywhere </td>
                                </tr>
                                <tr>
                                    <td>Recurring expense of salt</td>
                                    <td>No salt No chemical</td>
                                </tr>
                                <tr>
                                    <td>Waste water generation</td>
                                    <td>No Waste Water </td>
                                </tr>
                                <tr>
                                    <td> High Electric Cost </td>
                                    <td>Works on 24 Volts DC</td>
                                </tr>
                                <tr>
                                    <td> Waste water discharge with high chloride</td>
                                    <td>Eco friendly and green products</td>
                                </tr>

                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    
    
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
        </div>
     -->
    
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