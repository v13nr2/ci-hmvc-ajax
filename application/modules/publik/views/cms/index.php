<?php 
	foreach($config as $row){ 
		$judulweb = $row["judul_web"];
		$telpon = $row["nomor_telepon"];
		$animasi_teks = $row["animasi_teks"];
		$email = $row["email"];
		$informasi = $row["informasi"];
		$footer_kanan = $row["footer_kanan"];
		$footer_kiri = $row["footer_kiri"];
		$running_text = $row["running_text"];
	}
	foreach($sosmed as $row){ 
		$facebook = $row["facebook"];
		$twitter = $row["twitter"];
		$linkedin = $row["linkedin"];
		$google_plus = $row["google_plus"];
	}	
?>
<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <!--POP Up Form Wrap Start-->
    <div class="modal fade" id="apply_form" tabindex="-1" role="dialog" aria-labelledby="sign-in">
        <div class="modal-dialog" role="document">
            <div class="gt_pf_outer_wrap default_width">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="col-md-6">
                    <div class="gt_pf_form default_width">
                        <h3>Register a Courses</h3>
                        <form class="default_width">
                            <input class="c_ph" type="text" placeholder="Name">
                            <input class="c_ph" type="email" placeholder="Email">
                            <input class="c_ph" type="text" placeholder="Phone Number">
                            <select>
                                <option>Course</option>
                                <option>Course</option>
                                <option>Course</option>
                            </select>
                            <div class="gt_view_more default_width">
                                <a href="#">Register Now</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gt_pf_form_img default_width">
                        <a href="#"><img src="images/logo-white.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--POP Up Form Wrap End-->

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
                        <li><i class="fa fa-envelope-o"></i><a href="#"><?php echo $email;?></a></li>
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
                    <a href="#"><img src="<?php echo base_url();?>/assets/kid/images/logo.png" alt=""></a>
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
                        <li class="active"><a href="javascript:avoid(0);">Home</a></li>
                        <?php foreach($menu_1 as $row){ ?>
                        <li><a href="javascript:avoid(0);"><?php echo $row["nama_menu"];?></a>
                            <ul>
								
								<?php foreach($menu_2 as $row2){ 
									if($row2["parent_id"]==$row["id"]){
								?>
                                <li><a href="<?php echo $row2["controller"];?>"><?php echo $row2["nama_menu"];?></a></li>
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
	
	<marquee><?php echo $running_text;?></marquee>
	
    <!--Banner Wrap Start-->
    <div class="gt_banner default_width wow fadeInUp">
        <div class="swiper-container" id="swiper-container">
             <ul class="swiper-wrapper">
			 <?php foreach($banner as $row){ ?>
                <li class="swiper-slide">
                    <img src="<?php echo base_url();?>/assets/uploads/files/<?php echo $row["gambar"];?>" alt="">
                    <div class="gt_banner_text gt_slide_1">
                        <?php echo $animasi_teks;?>
                    </div>
                </li>
			 <?php } ?>
             </ul>
         </div>
        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    </div>
    <!--Banner Wrap End-->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--Banner Services Wrap Start-->
        <div class="gt_servicer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 wow fadeInUp">
                        <div class="gt_main_services bg_1">
                            <i class="icon-write-board"></i>
                            <h5>PGITT</h5>
                            <p></p>
                            <a  class="bg_1" href="<?php echo base_url();?>content/pg_it_alfurqon"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 wow fadeInUp">
                        <div class="gt_main_services bg_1">
                            <i class="icon-write-board"></i>
                            <h5>TKIT</h5>
                            <p></p>
                            <a  class="bg_1" href="<?php echo base_url();?>content/tk_it_alfurqon"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-2 wow fadeInUp">
                        <div class="gt_main_services bg_2">
                            <i class="icon-teacher-showing-on-whiteboard"></i>
                            <h5>SDIT</h5>
                            <p></p>
                             <a class="bg_2" href="<?php echo base_url();?>content/sd_it_alfurqon"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 wow fadeInUp">
                        <div class="gt_main_services bg_3">
                            <i class="icon-compass"></i>
                            <h5>SMPIT</h5>
                            <p></p>
                             <a class="bg_3" href="<?php echo base_url();?>content/smp_it_alfurqon"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 wow fadeInUp">
                        <div class="gt_main_services bg_4">
                            <i class="icon-number-blocks"></i>
                            <h5>SMAIT</h5>
                            <p></p>
                              <a class="bg_4" href="<?php echo base_url();?>content/sma_it_alfurqon"> <i class="fa fa-arrow-right"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner Services Wrap End-->
        
        <!--Offer Wrap start-->
        <section class="gt_wht_offer_bg wow fadeInUp">
            <div class="container">
            	<div class="gt_hdg_1 wow zoomIn wow zoomIn">
                    <h3>KEUNGGULAN YANG KAMI TAWARKAN</h3>
                    <p>
                    </p>
                    <span><img src="<?php echo base_url();?>assets/kid/images/hdg-01.png" alt=""></span>
                </div>
                <!--What We Offer 2 Wrap Start-->
                <div class="row">
				<?php foreach($offers as $row){ ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-pencil bg_2"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#"><?php echo $row['judul'];?></a></h5>
                                <span class="bg_offer_2"></span>
                                <p><?php echo $row['keterangan'];?></p>
                            </div>
                        </div>
                    </div>
				<?php } ?>   
                </div>
                <!--What We Offer 2 Wrap End-->
            </div>
        </section>
        <!--offer Wrap End-->
        
        <!--Facts and Figure Wrap End-->
        
        <!--Facts and Figure Wrap End-->

        <!--Popular Courses Wrap Start-->
        
        <!--Popular Courses Wrap End-->

        <!--Our Gallery Wrap Start-->
        
        <!--Our Gallery Wrap End-->

        <!--Meet Our Best Teacher Wrap Start-->
        
        <!--Meet Our Best Teacher Wrap End-->

        <!--Testimonial Wrap Start-->
        
        <!--Testimonial Wrap End-->

        <!--Latest News Wrap Start-->
        
        <!--Latest News Wrap End-->

        <!--Our Client Wrap Start-->
        
        <!--Our Client Wrap End-->
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
        <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->
