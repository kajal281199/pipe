<?php
include('admin/config.php');
?>

<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Gallery</title>

    <meta name="keywords" content="" />

    <meta name="description" content="">

    <meta name="author" content="">
    <!-- Mobile view -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->

    <link rel="shortcut icon" href="images/logo/logo.webp">

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
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->
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

    <!--end loading-->

    <div class="wrapper-boxed">
        <div class="site-wrapper">
            <?php include"includes/header.php";?>

            <!--end menu-->
            <!--end menu-->


            <section class="section-side-image clearfix">
                <div class="img-holder col-md-12 col-sm-12 col-xs-12">
                    <div class="background-imgholder" style="background:url(images/bg/gallery2.webp);">
                        <img class="nodisplay-image" src="images/header-inner-4.html" alt="" />
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                            <div class="header-inner less-height">
                                <div class="overlay">
                                    <div class="text text-center">
                                        <h3 class="uppercase text-white less-mar-1 title" style=" color: white;">
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
                    <h1 class="uppercase font-weight-7 text-gyellow text-center">Gallery</h1>
                    <div class="tp-title-line-2"></div>
                    <div class="row mt-5" id="g">
                        <?php     
                             $sql=mysqli_query($conn,"select * from gallery");

                             while($arr=mysqli_fetch_array($sql)){
                             ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom">
                            <a class="lightbox" href="#<?php echo $arr['name'] ?>">
                                <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt=""
                                    class="img-responsive" style="height:250px; width:300px;" /></a>

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
                </div>

            </section>
            <!-- end section -->
            <div class="divider-line solid light"></div>


            <!-- end section -->
            <div class="divider-line solid light"></div>




            <!-- end section -->

            <!--end section-->



            <?php include"includes/footer.php";?>

            <!-- end section -->

             <a href="#" class="scrollup"></a>
    <a class="whatsapp"  href="https://wa.me/+919820474954" target="_blank"><img src="images/whatsapp-icon.webp" style="width:45px;"></a>
<!-- end scroll to top of the page-->

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