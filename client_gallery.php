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


    <!-- Template's stylesheets END -->

    <!-- Style Customizer's stylesheets -->

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">

    <link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/transport.css" type="text/css">
	<style>
     .img-responsive {
        border-radius: 10px;
    }
    .modal-img{
        width:55%;
    }
    @media (max-width:768px) {
        .modal-img{
        width:90%;
    }
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
                    <div class="background-imgholder" style="background:url(images/bg/client-gallery.webp);">
                        <img class="nodisplay-image" src="images/header-inner-4.html" alt="" />
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                            <div class="header-inner less-height">
                                <div class="overlay">
                                    <div class="text text-center">
                                        <h3 class="uppercase text-white less-mar-1 title" style=" color: white;">Client
                                            Gallery</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--end header inner-->
            <section class="my-5 py-5">
                <div class="container">
                    <h1 class="uppercase font-weight-7 text-gyellow text-center">Client Gallery</h1>
                    <div class="tp-title-line-2"></div>
                    <div class="row mt-5" id="g">
                        <?php     
                           $sql=mysqli_query($conn,"select * from client_gallery");

                           while($arr=mysqli_fetch_array($sql)){
                           ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom">



                            <?php
                               $img1 =  $arr['image']; 
                                $upload=substr( $img1,strlen( $img1)-4,strlen( $img1));
                             if ($upload==".MP4" || $upload =='.mp4'){ ?>
                            <video class="img-responsive" style="height:250px; width:300px;" controls>
                                <source src="admin/dist/img/credit/<?php echo $arr['image'];?>" type="video/mp4">
                            </video>
                            <?php }else{ ?>
                            <a class="lightbox" href="#<?php echo $arr['name'] ?>">
                                <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" class="img-responsive"
                                    style="height:250px; width:300px;">
                                <?php }                     
                                    ?> </a>


                            <div class=" lightbox-target" id="<?php echo $arr['name'] ?>">
                                <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt=""
                                    class="img-responsive modal-img" />
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
        itemTemplate: '<li>' +
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