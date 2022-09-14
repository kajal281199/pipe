<?php
include('admin/config.php');

if(isset($_POST['Submit'])){

 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];
    
  
    $sql=mysqli_query($conn,"INSERT INTO `contact`(`name`,`email`,`mobile`,`message`) 
    VALUES ('$name','$email','$mobile','$message')");
  }
  
?>

<html>





<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contact
    </title>

    <meta name="keywords" content="" />

    <meta name="description" content="">

    <meta name="author" content="">
    <!-- Mobile view -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->

    <link rel="shortcut icon" href="images/logo/logo.png" href="#">

    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->

    <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

    <link rel="stylesheet" href="css/theme-default.css" type="text/css">

    <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">

    <link rel="stylesheet" href="css/corporate.css" type="text/css">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css"
        media="screen" />

    <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">

    <link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">

    <link rel="stylesheet" href="js/jFlickrFeed/style.css" />

    <!-- Template's stylesheets END -->

    <!-- Style Customizer's stylesheets -->

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/transport.css" type="text/css">


    <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->

    <!-- Style Customizer's stylesheets END -->

    <!-- Skin stylesheet -->


    <style>
    .cal:hover {
        width: 45px;
        cursor: pointer;
    }

    .cal {
        border: 2px solid #226bb4;
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

    .cal {
        width: 45px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
    }

    .eml:hover {
        width: 45px;
        cursor: pointer;
    }

    .eml {
        border: 2px solid #226bb4;
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

    .eml {
        width: 45px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
    }

    .what:hover {
        width: 45px;
        cursor: pointer;
    }

    .what {
        border: 2px solid #226bb4;
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

    .what {
        width: 45px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
    }

    .ins:hover {
        width: 45px;
        cursor: pointer;
    }

    .ins {
        border: 2px solid #226bb4;
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

    .ins {
        width: 45px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
    }

    .phone:hover {
        width: 45px;
        cursor: pointer;
    }

    .phone {
        border: 2px solid #226bb4;
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

    .phone {
        width: 45px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
    }

    .download {
        color: #fff;
        padding: 0 0px 0 0px;
        line-height: 50px;
        font-size: 18px;
        top: 57%;
        transition-property: width;
        overflow: hidden;
    }

    .download {
        width: 33px;
        transition-timing-function: linear;
        position: fixed;
        z-index: 9999;
        right: 0;
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



            <section class="section-side-image clearfix">

                <div class="img-holder col-md-12 col-sm-12 col-xs-12">

                    <div class="background-imgholder" style="background:url(images/bg/contact-us.webp);">

                        <img class="nodisplay-image" src="images/header-inner-4.html" alt="" />
                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">

                            <div class="header-inner less-height">

                                <div class="overlay">

                                    <div class="text text-center">

                                        <h3 class="uppercase text-white less-mar-1 title" style=" color: white;">Contact
                                        </h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!--end header section -->



            <!--end section-->

            <section class="sec-padding section-light">

                <div class="container">

                    <h1 class="uppercase font-weight-7 text-gyellow text-center">Contact Us</h1>
                    <div class="tp-title-line-2"></div>
                    <div class="row mt-5">

                        <div class="col-md-8">


                            <div class="padding-4" style="padding: 30px; background-color: #fff; box-shadow: 1px 1px 15px #a19f9f;">
                                <!-- text-box white padding-4 -->

                                <div class="smartforms-modal-body">

                                    <div class="smart-wrap">

                                        <div class="smart-forms smart-container transparent wrap-full">
                                            <div class="form-body no-padd">

                                                <form method="post">
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="name" class="gui-input"
                                                                placeholder="Enter Name" required>
                                                            <span class="field-icon"><i class="fa fa-user"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="email" name="email" class="gui-input"
                                                                placeholder="Email Address" required>
                                                            <span class="field-icon"><i
                                                                    class="fa fa-envelope"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="mobile" class="gui-input"
                                                                placeholder="Enter Telephone" required>
                                                            <span class="field-icon"><i
                                                                    class="fa fa-phone-square"></i></span>
                                                        </label>
                                                    </div>
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <textarea class="gui-textarea" name="message"
                                                                placeholder="Enter Message"></textarea>
                                                            <span class="field-icon"><i
                                                                    class="fa fa-comments"></i></span>
                                                            <span class="input-hint"> <strong>Hint:</strong> Please
                                                                enter between 80 - 300 characters.</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-footer text-left">
                                                        <button class="button btn-primary" type="submit"
                                                            name="Submit">Submit Now</button>
                                                        <!-- <button type="reset" class="button"> Cancel </button> -->
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- end .form-body section -->

                                        </div>
                                        <!-- end .smart-forms section -->

                                    </div>
                                    <!-- end .smart-wrap section -->

                                </div>

                            </div>
                            <!-- end .smart-wrap section -->

                            <!-- end .smart-forms section -->

                        </div>

                        <!--end item-->

                        <div class="col-md-4 text-left">

                            <h4 class="text-gyellow">Head Office :</h4>
                            <address>

                                <strong class="text-dark">Address:</strong><br>

                                <b>SUDARSHAN Water Technology - India</b>

                                <br>

                                Cidco colony, sectors 18. C/5/28. 1<sup>st </sup> floor, Panvel,

                                <br>

                                New Bombay, Maharashtra-410206.

                            </address>

                            <strong class="text-dark">Mobile:</strong>+91 9820474954
                            <br>




                            <strong class="text-dark">Email:</strong>shreesudarshan_wc@yahoo.com

                            <hr>

                            <h4 class="text-gyellow"> Factory:</h4>


                            <address>
                                <b>Jetpur,Rajkot (Gujrat)- 360370</b>
                            </address>
                            <strong class="text-dark">Mobile: </strong> 075064 74532
                            <br>

                            <br>
                            <br>

                            <div>
                                <h4 class="text-gyellow"> Office info :</h4>

                                <address>



                                    <b>Kovilpatti ( Tamilnadu)</b>

                                    <br>




                                </address>

                                <strong class="text-dark">Mobile: </strong> +91 72996 74371
                                <br>


                            </div>



                            <!--end item-->

                        </div>
                        <br>

















                    </div>

            </section>



            <!-- end section -->

            <div class="pb-5">

            </div>
            <div class="divider-line solid light"></div>




            <!--end section-->



            <?php include"includes/footer.php";?>


            <!-- end section -->

             <a href="#" class="scrollup"></a>
    <a class="whatsapp"  href="https://wa.me/+919820474954" target="_blank"><img src="images/whatsapp-icon.png" style="width:45px;"></a>

            <!-- end scroll to top of the page-->

        </div>

        <!--end site wrapper-->

    </div>

    <!--end wrapper boxed-->

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

    <script type="text/javascript" src="js/smart-forms/jquery.form.min.js"></script>

    <script type="text/javascript" src="js/smart-forms/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/smart-forms/additional-methods.min.js"></script>

    <script type="text/javascript" src="js/smart-forms/smart-form.js"></script>

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
    $(window).load(function() {

        setTimeout(function() {

            $('.loader-live').fadeOut();

        }, 1000);

    })
    </script>

    <script src="js/functions/functions.js"></script>

    <script>
    gtag('config', 'AW-873400912/-CU8CITdhckBENCUvKAD', {

        'phone_conversion_number': 'REPLACE WITH VALUE'

    });
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 10885534940 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10885534940"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-10885534940');
    </script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85600731-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-85600731-1');
    </script>



</body>



</html>