<?php 
	foreach($config as $row){ 
		$judulweb = $row["judul_web"];
		$telpon = $row["nomor_telepon"];
		$email = $row["email"];
		$informasi = $row["informasi"];
		$footer_kanan = $row["footer_kanan"];
		$footer_kiri = $row["footer_kiri"];
	}
	foreach($sosmed as $row){ 
		$facebook = $row["facebook"];
		$twitter = $row["twitter"];
		$linkedin = $row["linkedin"];
		$google_plus = $row["google_plus"];
	}
	
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kid Template for Children and child.">
    <meta name="keywords" content="child,children,school,childcare,colorful">
    <meta name="author" content="2goodtheme">

    <title><?php echo $judulweb;?></title>
    <!-- Custom Main StyleSheet CSS -->
    <link href="<?php echo base_url();?>/assets/kid/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="<?php echo base_url();?>/assets/kid/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="<?php echo base_url();?>/assets/kid/css/responsive.css" rel="stylesheet">
  </head>

  <body>

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <!--Header Wrap Start-->
    <header>
        <div class="gt_top3_wrap default_width">
            <div class="container">
                <div class="gt_top3_scl_icon">
                    <ul class="gt_hdr3_scl_icon">
                        <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $google_plus;?>"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="gt_hdr_3_ui_element">
                    <ul>
                        <li><i class="fa fa-phone"></i><?php echo $telpon;?></li>
                        <li><i class="fa fa-envelope-o"></i><a href="<?php echo base_url();?>/assets/kid/#"><?php echo $email;?></a></li>
                    </ul>
                </div>
                <div class="gt_hdr3_search">
                    <form>
                        <input type="search" placeholder="">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="gt_top3_menu default_width">
            <div class="container">
                <div class="gt-logo">
                    <a href="<?php echo base_url();?>/assets/kid/#"><img src="<?php echo base_url();?>/assets/kid/images/logo.png" alt=""></a>
                </div>
                <nav class="gt_hdr3_navigation">
                    <!-- Responsive Buttun -->
                    <a class="navbar-btn collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>   
                    <!-- Responsive Buttun -->
                    <ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <?php foreach($menu_1 as $row){ ?>
                        <li><a href="javascript:avoid(0);"><?php echo $row["nama_menu"];?></a>
                            <ul>
								
								<?php foreach($menu_2 as $row2){ 
									if($row2["parent_id"]==$row["id"]){
								?>
                                <li><a href="<?php echo base_url().$row2["controller"];?>"><?php echo $row2["nama_menu"];?></a></li>
								<?php } }?>
                            </ul>
                        </li>
						<?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--Header Wrap End-->

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width wow fadeInUp">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3><?php echo $judul;?></h3>
                <ul>
                    <li><a href="<?php echo base_url();?>/assets/kid/#">Home</a></li>
                    <li><a href="<?php echo base_url();?>/assets/kid/#"><?php echo ucfirst($judul);?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--News Grid Wrap Start-->
        <section>
            <div class="container">
                <div class="row">
                    
                    <!--Aside Bar Wrap Start-->
                            <!--Search Bar Wrap Start-->
                            <?php 
							foreach($album as $row){ 
							?>
							
                    <div class="col-md-3">
                        <aside class="gt_aside_outer_wrap">
							<?php
								echo $row["judul"];
								echo "<br>";
								?>
								<img src="<?php echo base_url();?>assets/uploads/album/<?php echo $row["gambar"];?>" width="100%">
								<?php
								
								echo "<br>";
								echo "<br>";
							
							?>
							
                            <!--Recent News Wrap Start-->
                            <!--Tags Wrap Start-->
                            
                            <!--Tags Wrap Start-->
                        </aside>
                    </div>
							<?php } ?>
                    <!--Aside Bar Wrap End-->
                </div>
            </div>
        </section>
        <!--News Grid Wrap End-->
    </div>
    <!--Main Content Wrap End-->
    
    <!--Footer Wrap Start-->
    <!--Footer Wrap Start-->
    <footer>
        <!--NewsLetter Wrap Start-->
        <div class="gt_newsltr_bg default_width wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="gt_newsltr_wrap">
                            <form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--NewsLetter Wrap End-->

        <!--Footer Wrap Start-->
        
        <!--Footer Wrap End-->

        <!--Copyright Wrap Start-->
        <div class="copyright_bg default_width wow fadeIn">
            <div class="container">
                <div class="copyright_wrap default_width">
                    <p><?php echo $footer_kanan;?></p>
                    <span><?php echo $footer_kiri;?></span>
                </div>
            </div>
        </div>  
        <!--Copyright Wrap End-->      
    </footer> 
    <!--Footer Wrap End-->
    <!--Footer Wrap End-->
    <!--Back to Top Wrap Start-->
    <div class="back-to-top">
        <a href="<?php echo base_url();?>/assets/kid/#home"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->



    <!--Jquery Library-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/bootstrap.min.js"></script>
    <!--Bx-Slider JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery.bxslider.js"></script>
    <!--Accordian JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/wow.min.js"></script>
    <!--Custom JavaScript-->
    <script src="<?php echo base_url();?>/assets/kid/js/custom.js"></script>

  </body>
</html>
