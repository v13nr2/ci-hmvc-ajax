<?php 
	foreach($config as $row){ 
		$judulweb = $row["judul_web"];
		$telpon = $row["nomor_telepon"];
		$email = $row["email"];
		$informasi = $row["informasi"];
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
                        <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-linkedin"></i></a></li>
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
                    <a href="<?php echo base_url();?>/assets/kid/#"><img src="images/logo.png" alt=""></a>
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
                    <!--News Grid List Wrap Start-->
                    <div class="col-md-9">
                        <div class="gt_latest_news_wrap default_width mb wow fadeInUp">
                            <img src="extra-images/news-listing-01.jpg" alt="">
                            <div class="gt_news_des_wrap default_width">
                                <div class="gt_news_date"><span>20</span>Aug 2016</div>
                                <div class="gt_latst_new_des">
                                    <h5><a href="<?php echo base_url();?>/assets/kid/#">Lorem ipsum dolor sit amet vero eos </a></h5>
                                    <ul>
                                        <li>Posted by: <a href="<?php echo base_url();?>/assets/kid/#"> Melissa Black</a></li>
                                        <li><i class="fa fa-comments-o"></i><a href="<?php echo base_url();?>/assets/kid/#">20 Comments</a></li>
                                    </ul>
                                    <p>d ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                                </div>
                            </div>
                        </div>
                        <div class="gt_latest_news_wrap default_width mb wow fadeInUp">
                            <img src="extra-images/news-listing-02.jpg" alt="">
                            <div class="gt_news_des_wrap default_width">
                                <div class="gt_news_date"><span>20</span>Aug 2016</div>
                                <div class="gt_latst_new_des">
                                    <h5><a href="<?php echo base_url();?>/assets/kid/#">Lorem ipsum dolor sit amet vero eos </a></h5>
                                    <ul>
                                        <li>Posted by: <a href="<?php echo base_url();?>/assets/kid/#"> Melissa Black</a></li>
                                        <li><i class="fa fa-comments-o"></i><a href="<?php echo base_url();?>/assets/kid/#">20 Comments</a></li>
                                    </ul>
                                    <p>d ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                                </div>
                            </div>
                        </div>
                        <div class="gt_latest_news_wrap default_width mb wow fadeInUp">
                            <img src="extra-images/news-listing-03.jpg" alt="">
                            <div class="gt_news_des_wrap default_width">
                                <div class="gt_news_date"><span>20</span>Aug 2016</div>
                                <div class="gt_latst_new_des">
                                    <h5><a href="<?php echo base_url();?>/assets/kid/#">Lorem ipsum dolor sit amet vero eos </a></h5>
                                    <ul>
                                        <li>Posted by: <a href="<?php echo base_url();?>/assets/kid/#"> Melissa Black</a></li>
                                        <li><i class="fa fa-comments-o"></i><a href="<?php echo base_url();?>/assets/kid/#">20 Comments</a></li>
                                    </ul>
                                    <p>d ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                                </div>
                            </div>
                        </div>
                        <!--Pagination Wrap Start-->
                        <div class="gt_pagination_outer_wrap wow fadeInUp">
                            <ul>
                                <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a href="<?php echo base_url();?>/assets/kid/#">1</a></li>
                                <li><a href="<?php echo base_url();?>/assets/kid/#">2</a></li>
                                <li><a href="<?php echo base_url();?>/assets/kid/#">3</a></li>
                                <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!--Pagination Wrap End-->
                    </div>
                    <!--News Grid List Wrap End-->

                    <!--Aside Bar Wrap Start-->
                    <div class="col-md-3">
                        <aside class="gt_aside_outer_wrap">
                            <!--Search Bar Wrap Start-->
                            <?php 
							foreach($bannersamping as $row){ 
								echo $row["judul"];
								echo "<br>";
								?>
								<img src="<?php echo base_url();?>assets/uploads/files/<?php echo $row["gambar"];?>" width="100%">
								<?php
								
								echo "<br>";
								echo "<br>";
							}
							?>
							<?php 
							echo "Informasi";
							echo "<br>";
							echo $informasi;?>
                            <!--Recent News Wrap Start-->
                            <!--Tags Wrap Start-->
                            
                            <!--Tags Wrap Start-->
                        </aside>
                    </div>
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
                                <input type="text" placeholder="Enter your email">
                                <input class="button_style_1 btn_lg" type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--NewsLetter Wrap End-->

        <!--Footer Wrap Start-->
        <div class="gt_footer_bg default_width">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 wow fadeIn">
                        <div class="gt_office_wrap default_width">
                            <div class="gt_office_time widget">
                                <h5>Opening Hour</h5>
                                <ul>
                                    <li>
                                        Monday - Friday
                                        <span>9am to 5pm</span>
                                    </li>
                                    <li>
                                        Saturady - Sunday 
                                        <span>off</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="gt_foo_about widget">
                                <h5>About Kidscenter</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin nibh vel velit auctor aliquet.</p>
                                <ul>
                                    <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="<?php echo base_url();?>/assets/kid/#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="foo_col_outer_wrap default_width">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 wow zoomIn">
                                    <div class="gt_foo_news widget">
                                        <h5>Latest News</h5>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="extra-images/foo-news-01.jpg" alt="">
                                                </figure>
                                                <div class="foo_news_content">
                                                    <a href="<?php echo base_url();?>/assets/kid/#">Lorem ipsum dolor sit amet dolor sit amet</a>
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            <span>07-March-2016</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-comments-o"></i>
                                                            <span>20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="extra-images/foo-news-02.jpg" alt="">
                                                </figure>
                                                <div class="foo_news_content">
                                                    <a href="<?php echo base_url();?>/assets/kid/#">Lorem ipsum dolor sit amet dolor sit amet</a>
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            <span>07-March-2016</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-comments-o"></i>
                                                            <span>20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 wow zoomIn">
                                    <div class="gt_foo_recent_projects widget">
                                        <h5>Our Gallery</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-03.jpg" alt=""></a></li>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-04.jpg" alt=""></a></li>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-05.jpg" alt=""></a></li>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-06.jpg" alt=""></a></li>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-07.jpg" alt=""></a></li>
                                            <li><a href="<?php echo base_url();?>/assets/kid/#"><img src="extra-images/foo-news-08.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 wow zoomIn">
                                    <div class="widget">
                                        <h5>Our Address</h5>
                                        <ul class="gt_team1_contact_info">
                                            <li><i class="fa fa-map-marker"></i>14350 60th St North Clearwater FL. 33760 </li>
                                            <li><i class="fa fa-phone"></i>1-677-124-44227 </li>
                                            <li><i class="fa fa-envelope"></i> <a href="<?php echo base_url();?>/assets/kid/#">info@kidscenter.com</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Footer Wrap End-->

        <!--Copyright Wrap Start-->
        <div class="copyright_bg default_width wow fadeIn">
            <div class="container">
                <div class="copyright_wrap default_width">
                    <p>©copyrights.<a href="<?php echo base_url();?>/assets/kid/#">Kidscenter.com</a>. All Right Reserved.</p>
                    <span>Designed By: <a href="<?php echo base_url();?>/assets/kid/#">2GoodTemplate</a></span>
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
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Bx-Slider JavaScript-->
    <script src="js/jquery.bxslider.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
    <script src="js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="js/wow.min.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

  </body>
</html>
