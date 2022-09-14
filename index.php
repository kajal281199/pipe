<?php
include('admin/config.php');
?>

<!DOCTYPE html>
<html lang="en">


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

    <link rel="shortcut icon" href="images/logo/logo.png">

    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">
    <!-- Google fonts  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> -->

    <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

    <link rel="stylesheet" href="css/theme-default.css" type="text/css">

    <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
    <!-- <link rel="stylesheet" href="admin/dist/css/adminlte.min.css"> -->


    <link rel="stylesheet" href="css/transport.css" type="text/css">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css"
        media="screen" />

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
     .img-gallery {
        border-radius: 10px;
        /* width:100%; */
    }
    .modal-img{
        width:55%;
    }
    @media (max-width:768px) {
        .modal-img{
        width:90%;
    }
    }
    .cal:hover {
        width: 45px;
        cursor: pointer;
    }

    .cal {
        border: 2px solid #226bb4;
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
        padding: 0 8px 0 14px;
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
        padding: 0 8px 0 14px;
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
        padding: 0 8px 0 14px;
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
        padding: 0 8px 0 14px;
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



    /*Eliminates padding, centers the thumbnail */


    /* Styles the thumbnail */

    a.lightbox img {
        height: 150px;
        border: 3px solid white;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
        margin: 15px 20px 20px 20px;
    }

    /* Styles the lightbox, removes it from sight and adds the fade-in transition */

    .lightbox-target {
        position: fixed;
        top: -100%;
        width: 100%;
        background: rgba(0, 0, 0, .7);
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
        left: 0;
        right: 0;
        bottom: 0;
        max-height: 0%;
        max-width: 0%;
        border: 3px solid white;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
        box-sizing: border-box;
        -webkit-transition: .5s ease-in-out;
        -moz-transition: .5s ease-in-out;
        -o-transition: .5s ease-in-out;
        transition: .5s ease-in-out;

    }

    /* Styles the close link, adds the slide down transition */

    .lightbox-close {
        display: block;
        width: 50px;
        height: 50px;
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
        top: 10px;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
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
        top: 10px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    /* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

    .lightbox-target:target {
        opacity: 1;
        top: 0;
        bottom: 0;
        left: 0;
        overflow: scroll;
    }

    .lightbox-target:target img {
        max-height: 100%;
        max-width: 100%;
    }



    .lightbox-target:target a.lightbox-close {
        top: 23%;
    }

    .margin-bottom {
        margin-bottom: 0px;
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
        position: initial;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media(max-width: 600px) {
        .c {
            margin-left: 35px;
            margin-right: 35px;
        }

        .c1 {
            margin-bottom: -40px;
        }

        .c2 {
            padding-top: 24px;
        }

        .c3 {
            margin-bottom: 10px;
        }
    }

    .header-inner .overlay {
        background-color: rgba(19, 98, 144, 0.7);
    }
</style>


</head>

<body>
    <?php include ("includes/header.php") ?>

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

    <!-- START REVOLUTION SLIDER 5.0 -->
    <Section class="Hero">
        <div class="row">
            <div class="col-md-12">
                <div class="header-inner " style="height:100px; width:100% ">
                    <div class="overlay">
                        <div>
                            <h4 class="uppercase text-white less-mar-1 title "
                                style="text-align:center; margin-top:40px; color: white;"><b>Total solution of scale
                                    &
                                    Hard water..</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="images/sliders/chakra.webp" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/chakra.webp" class="mobile-slide">

                    </div>


                    <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="images/sliders/indeximg.webp" style="width:100%; height: 550px;"
                            class="desktop-slide">
                        <img src="images/sliders/phone%20slider/indeximg.webp" class="mobile-slide">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="images/sliders/agri.webp" style="width:100%; height: 550px;" class="desktop-slide">
                        <img src="images/sliders/phone%20slider/agri.webp" class="mobile-slide">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="images/sliders/indeximg2.webp" style="width:100%; height: 550px;"
                            class="desktop-slide">
                        <img src="images/sliders/phone%20slider/indeximg2.webp" class="mobile-slide">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>

            </div>

        </div>

        <!-- <div class="container"> -->
        <div class="row">
            <div class="col-sm-12">
                <div class=" margin-bottom ">
                    <img src="images/sliders/new.webp" alt="" style="width:100%;">
                </div>

                <!--end item-->
            </div>
            <!-- </div> -->

        </div>
    </Section>

    <main id="main">



        <section class="py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 line col-centered c1 pb-3">
                        <h3
                            class="uppercase font-weight-7 col-lg-9 col-md-9 col-sm-12 col-centered text-gyellow text-center">
                            Welcome to Sudarshan Technology :</h3>
                        <h6 class="uppercase font-weight-5 less-mar-1 subhead-green text-center">INDIA'S Leading
                            anti-scale
                            systems

                        </h6>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-centered para text-center c pb-3">

                                Shree Sudarshan Brand in water conditioner & water treatment is well known in India, in past
                                10 years
                                we
                                have achieved Big highs mainly in Agriculture and Domestic segments! With Electro-Magnet
                                technology
                                our successes rate is over 90% since last 10 years!
                            </div>
                        </div>
                    </div>
                    <div class="line col-md-9" style="padding-bottom: 30px;">
                        <a class="btn btn-dark-3 btn-medium uppercase" href="about.php" style="margin-left: 59%;">Read
                            more</a>
                    </div>
                </div>
            </div>
        </section>
        <!--end item-->

        <!-- end section -->
        <section class="tp-sec-bg py-5 my-5">
            <div class="container">

                <div class="row">
                    <div class="col-md-7 padding-left-5">

                        <div class="col-xs-12 nopadding">

                            <div class="sec-title-container text-left pb-0">
                                <h3 class="uppercase font-weight-7 text-gyellow less-mar-1">HOW SHREE SUDARSHAN WATER
                                    CONDITIONER
                                    WORKS
                                </h3>
                                <div class="tp-title-line-1 align-left"></div>

                            </div>

                        </div>
                        <p class="para mb-2">New Sudarshan capacitance impulse technology
                            releases...programmed
                            complexed module line High electronic frequency through copper cable coil winding on pipes.
                            This capacitance impulse frequency effectively change & prevent different size of water
                            molecules likely to form scale, impulse frequency same time breaks the Hydrogen Bond between
                            opposite water molecules, this Results breakdown of large minerals crystals into tiny
                            minerals
                            particles and flush them away along with water in due course of time...
                        </p>
                        <a class="btn btn-dark-3 mt-2 btn-medium uppercase" href="howitworks.php">Read more</a>
                    </div>
                    <div class="col-md-5 c2"> <img src="images/sliders/img.webp" alt="" class="img-responsive img-gallery" /> </div>
                </div>
            </div>
        </section>

        <section class="py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <img src="images/sliders/agri.webp" alt="" class="img-responsive img-gallery" />
                        <h6 class="text-center text-gyellow mb-0"><b>Capacitance Impulse 4 Stage Model</b> </h6>
                        <p class="text-center">(Design applied for patent)</p>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">

                        <h3 class=" font-weight-7 text-gyellow">Sudarshan capacitance 4 stage water treatment model
                        </h3>
                        <div class="tp-title-line-2"></div>


                        <p class="para">Technology is most effective & advanced in recent time in india,
                            our
                            4 stage model releases high impulse frequency from all 4 corners of the unit to treat every
                            drop💧of water effectively,
                            Our inbuilt<b> High Amplitude volt</b> impulse technology penetrate water deep inside upto
                            center of the pipe, 4 stage model devide the single water flow into 4, without reducing
                            pressure
                            and keep water longer time under impulse frequency effect for assured Result and Better
                            De-scaling treatment.
                        </p>



                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 my-5 tp-sec-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 line col-centered mb-3">
                        <h3
                            class="uppercase text-gyellow col-md-9 col-sm-12 col-lg-9 font-weight-7 col-centered text-center">
                            Industrial Applications</h3>
                        <div class="tp-title-line-2"></div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-centered text-center">
                            <p class="para">"Water" the inevitable coolant in the
                                industries,
                                becomes an issue of concern when traces of Calcium, Magnesium integrated with
                                Carbonates,
                                Bicarbonates or Sulphates are found in term of 'HARD WATER'. Minerals in water
                                create problem
                                when they collect, compact and form scales. The problems posed by such 'HARD WATER'
                                to industry
                                are costly and time consuming as far the de-scaling & cleaning of industrial
                                equipments are
                                concerned.
                            </p>
                        </div>





                        <div class="line col-md-9">
                            <a class="btn btn-dark-3 btn-medium uppercase " href="Industrial-app.php"
                                style="margin-left: 59%;">Read
                                more</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="mt-3 mb-3">
            <div class="container">
                <div class="text text-center" id="gallery">
                    <h3 class="uppercase text-white text-gyellow less-mar-1 title">
                        <b>PRODUCT
                            GALLERY</b>
                        <div class="tp-title-line-2"></div>
                    </h3>
                </div>
                <div class="row">
                    <?php     
                      $sql=mysqli_query($conn,"select * from product_gallery limit 4");

                      while($arr=mysqli_fetch_array($sql)){
                      ?>

                    <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <a class="lightbox" href="#<?php echo $arr['name'] ?>">
                            <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive img-gallery"
                                style="height:250px; width:250px;" />
                        </a>
                        <div class=" lightbox-target" id="<?php echo $arr['name'] ?>">
                            <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive modal-img img-gallery"/>
                            <a class="lightbox-close" href="#gallery"></a>
                        </div>

                        <h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>
                    </div>


                    <?php }  ?>

                    <!--end item-->
                </div>
            </div>
        </section>

        <section class="g">

            <div class="container">
                <div class="text text-center" id="gal">
                    <h3 class="uppercase text-white less-mar-1 text-gyellow title"><b>
                            GALLERY</b>
                        <div class="tp-title-line-2"></div>
                    </h3>
                </div>

                <div class="row">
                    <?php     
                     $sql=mysqli_query($conn,"select * from gallery limit 4");

                     while($arr=mysqli_fetch_array($sql)){
                     ?>
                    <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
                        <a class="lightbox" href="#<?php echo $arr['name'] ?>">
                            <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive img-gallery"
                                style="height:250px; width:250px;" /></a>
                        <div class="lightbox-target" id="<?php echo $arr['name'] ?>">
                            <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="" class="img-responsive modal-img img-gallery"/>
                            <a class="lightbox-close" href="#gal"></a>
                        </div>
                        <h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>
                    </div>

                    <?php }  ?>

                    <!--end item-->
                </div>

            </div>
        </section>

        <section class="g tp-sec-bg py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 nopadding">

                        <div class="sec-title-container col-centered text-center pb-0">



                            <h3 class="uppercase font-weight-7 text-gyellow less-mar-1">Sudarshan technology have
                                additional
                                benifits
                                :</h3>

                            <div class="tp-title-line-2 align-left"></div>

                        </div>

                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 my-5">
                        <video width="100%" height="300" src="images/sliders/Sudarshan Compressed.mp4" type="video/mp4"
                            frameborder="0" controls=""></video>
                        <!--<img src="images/img/homepage_why.png" alt="" class="img-responsive pt-5">-->
                    </div>

                    <!--end item-->

                    <div class="col-md-12">


                        <!--end title-->

                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-5">

                            <div class="tp-feature-box-2 margin-bottom">

                                <div class="text-box-right">

                                    <img src="images/img/homepage/maintenance-free.webp" alt=""
                                        class="img-responsive pb-5 p-5">

                                    <h4 class="uppercase title font-weight-7 text-gyellow">Maintenance-free

                                    </h4>

                                    <h6 class="font-weight-4 para ">Just fit & forget! Our units have zero
                                        maintenance
                                        cost
                                        no recurring cost, one time investment for long life!

                                    </h6>
                                </div>

                            </div>

                            <!-- end feature box-->

                        </div>

                        <!-- end item-->

                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-5">

                            <div class="tp-feature-box-2 margin-bottom">

                                <div class="text-box-right">

                                    <img src="images/img/homepage/ecofriendly.webp" alt=""
                                        class="img-responsive pb-5 p-5">

                                    <h4 class="uppercase title font-weight-7 text-gyellow">100% Eco-friendly

                                    </h4>
                                    <h6 class="para font-weight-4">Sudarshan technology contributes to save
                                        world 🌎
                                        for
                                        not using hazardous chemicals, Resins, salts for water treatment, our
                                        technology
                                        is
                                        100% Environment friendly.

                                    </h6>
                                </div>

                            </div>

                            <!-- end feature box-->

                        </div>

                        <!-- end item-->

                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-5">

                            <div class="tp-feature-box-2 margin-bottom">

                                <div class="text-box-right">

                                    <img src="images/img/homepage/chemical-free.webp" alt=""
                                        class="img-responsive pb-5 p-5">

                                    <h4 class="uppercase title font-weight-7 text-gyellow">No Chemicals,No Salts, &
                                        No
                                        Magnetism

                                    </h4>
                                    <h6 class="para font-weight-4">Apart from chemicals & salt our technology
                                        abstained
                                        MAGNET & ELECTRO MAGNET because Magnet has very limited effects near
                                        wire 
                                        &
                                        Effect last 24 to 48 hrs only. While IMPULSE last 5-7 days!

                                    </h6>
                                </div>

                            </div>

                            <!-- end feature box-->

                        </div>

                        <!-- end item-->

                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-5">

                            <div class="tp-feature-box-2 margin-bottom ">

                                <div class="text-box-right">

                                    <img src="images/img/homepage/efficient.webp" alt=""
                                        class="img-responsive pb-5 p-5">

                                    <h4 class="uppercase title font-weight-7 text-gyellow">Efficient for All Pipes</h4>
                                    <h6 class="font-weight-4 para">Technology is suitable for all types of
                                        material
                                        pipes,
                                        like steel, G.i., Copper, S.S. P.V.C, etc.

                                    </h6>
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

        <section class="g py-3 my-5">
            <div class="container">
                <div class="row">
                    <h3
                        class="uppercase font-weight-7 col-md-9 col-sm-9 col-lg-9 text-gyellow col-centered text-center">
                        SAVE WATER</h3>
                    <div class="tp-title-line-2"></div>
                        <div style="margin: 0% 0px 0px;" class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
                            <img src="images/save.webp" class="img-responsive img-gallery">

                        </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="line">

                            <p class="para"> We feel proud to contribute in water saving movement though
                                our
                                Technology, in Agriculture we claim to save water 20% to 30% depending on
                                salinity of
                                water,
                                In Domestic & Industries sector we equally save water! We have used FIRST
                                STAGE
                                R.O.
                                WASTE Water by using our technology, (Generally waste water is thrown away!)
                                SAVE WATER
                                SAVE
                                WORLD 🌎
                            </p>


                        </div>
                    </div>
                    <!--end item-->

                    <!--end item-->

                </div>
            </div>
        </section>

        <section class="parallax-49">

            <div class="container-fluid nopadding">

                <div class="parallax-overlay bg-opacity-8">

                    <div class="container sec-tpadding-2 sec-bpadding-3">

                        <div class="row mb-4">

                            <div class="col-md-8 col-centered text-center">

                                <h3 class="uppercase text-white font-weight-7 text-gyellow">How is Sudarshan Anti Scale
                                    System
                                    Different?

                                </h3>
                                <div class="tp-title-line-2"></div>


                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 text-center ">

                                <img src="images/img/homepage/dif1.webp" class="img-responsive img-gallery">

                                <h5 class="raleway" style="color:#fff;">

                                    Electromagnetic Water Conditioner Vs. Sudarshan Anti Scale System

                                </h5>


                                <a class="btn btn-gyellow-2 uppercase" data-toggle="modal"
                                    data-target="#myModal">Compare</a>

                            </div>

                            <div class="col-md-6 text-center pt-m-1">

                                <img src="images/img/homepage/dif.webp" class="img-responsive img-gallery w-100">

                                <h5 class="raleway" style="color:#fff;">Water Softeners Vs. Sudarshan Anti
                                    Scale System
                                </h5>



                                <a class="btn btn-gyellow-2 uppercase" href="#" data-toggle="modal"
                                    data-target="#diff2">Compare</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- <section class="parallax-50">

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



                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="tp-feature-box-4 margin-bottom"> <img src="images/tp-9.jpg" alt=""
                                        class="img-responsive" />

                                    <div class="text-box text-left">

                                        <div class="inner-box">

                                            <h5 class="uppercase less-mar-1 title"><a href="#">Cargo
                                                    Services</a></h5>

                                            <div class="title-line"></div>





                                            <p>Consectetuer adipiscing elit sit et justo Suspendisse et justo.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="tp-feature-box-4 active margin-bottom"> <img src="images/tp-10.jpg" alt=""
                                        class="img-responsive" />

                                    <div class="text-box text-left">

                                        <div class="inner-box">

                                            <h5 class="uppercase less-mar-1 title"><a href="#">Shipment
                                                    Services</a>
                                            </h5>

                                            <div class="title-line"></div>





                                            <p>Consectetuer adipiscing elit sit et justo Suspendisse et justo.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="tp-feature-box-4 margin-bottom"> <img src="images/tp-11.jpg" alt=""
                                        class="img-responsive" />

                                    <div class="text-box text-left">

                                        <div class="inner-box">

                                            <h5 class="uppercase less-mar-1 title"><a href="#">Heavy
                                                    Transport</a></h5>

                                            <div class="title-line"></div>





                                            <p>Consectetuer adipiscing elit sit et justo Suspendisse et justo.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->

        <section class="py-5 my-5">
            <div class="container" id="btn">
                <div class="text text-center">
                    <h3 class="uppercase text-white title text-gyellow font-weight-7">
                        BROCHURES
                    </h3>
                    <div class="tp-title-line-2"></div>
                    <h6 class="uppercase font-weight-4 less-mar-1">Download our brochures in
                        various other
                        languages.

                    </h6>
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom"
                        style="display:flex;justify-content: center; ">
                        <a class="btn btn-dark-3 btn-medium uppercase pdf c3" href="images/sliders/english-brochure.pdf"
                            target="_blank"><i class="fa fa-download"></i>&nbsp;&nbsp;Digital Card</a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom"
                        style="display:flex;justify-content: center; float:right;">

                        <a class="btn btn-dark-3 btn-medium uppercase pdf c3" href="images/sliders/Brochure.pdf"
                            target="_blank"><i class="fa fa-download"></i>&nbsp;&nbsp;For Download</a>
                    </div>
                    <h4 class="uppercase title font-weight-5 pt-2 text-center "></h4>


                </div>
            </div>
        </section>

    </main>
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
                                <td>25 years long hassle free Life</td>
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

    <?php include ("includes/footer.php") ?>

    <a href="#" class="scrollup"></a>
    <!-- end scroll to top of the page-->

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