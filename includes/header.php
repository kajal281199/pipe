<?php $page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
<div class="clearfix"></div>

<div class="col-md-12 nopadding">

    <div class="header-section white style1 white pin-style">

        <div class="container">

            <div class="mod-menu">

                <div class="row">

                    <div class="col-sm-3">
                        <a href="index.php" title="" class="logo mar-4 " style="margin-left:20px;">
                            <img src="images/logo/wlogo.png" alt="" class="img-responsive">
                        </a>
                        <ul style="float: right;">
                            <li class="visible-xs menu-icon">
                                <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" style="color: #136290;"> <i aria-hidden="true" class="fa fa-bars"></i> </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-9">

                        <div class="main-nav">

                            <div id="menu" class="collapse">

                                <ul class="nav navbar-nav">
                                    <li  class="<?= $page == 'index.php' ? 'active':'' ?>"> <a href="index.php">Home</a>      </li>
                                    <li class="<?= $page == 'about.php' ? 'active':'' ?>" > <a href="about.php">About us</a> </li>

                                    <li class="<?= $page == 'howitworks.php' ? 'active':'' ?>" > <a href="howitworks.php">How it Works</a> </li>

                                    <li> <a href="#">Applications</a> <span class="arrow"></span>

                                        <ul class="dm-align-2">

                                            <li class="<?= $page == 'Industrial-app.php' ? 'active':'' ?>" > <a href="Industrial-app.php">Industrial Applications</a> </li>

                                            <li class="<?= $page == 'residential&Commercial-app.php' ? 'active':'' ?>" > <a href="residential&Commercial-app.php">Residential & Commercial Applications</a> </li>

                                            

                                            <li class="<?= $page == 'Agriculture-app.php' ? 'active':'' ?>" > <a href="Agriculture-app.php">Agriculture Applications</a> </li>
                                            <li> <a href="otheraplication.php">Other Applications</a> </li>

                                        </ul>

                                    </li>

                                   

                                   
                                    <li class="<?= $page == 'product_g.php' ? 'active':'' ?>" > <a href="product_g.php">Product Gallery</a>
                                        
                                    
                                      <li class="<?= $page == 'gallery.php' ? 'active':'' ?>"> <a href="gallery.php">Gallery</a> </li>

                                    
                                    <li class="<?= $page == 'contact.php' ? 'active':'' ?>"> <a href="contact.php">Contact</a> </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--end menu-->

</div>

<!--end menu-->