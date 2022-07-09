<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>EVENT ORGANIZER</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/linericon/style.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/nice-select/css/nice-select.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/owl-carousel/owl.carousel.min.css')?>">
                <!-- main css -->
                <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

       
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/assets/css/bootstrap.min.css')?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/bootstrap-icons.css')?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/assets/css/templatemo-leadership-event.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/templatemo-leadership-event.css')?>" rel="stylesheet">
                
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/assets/images/favicon.png')?>" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap.min.css')?>">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/font-awesome.min.css')?>">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/LineIcons.css')?>">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/animate.css')?>">

        <!--====== Aos css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/aos.css')?>">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/slick.css')?>">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/default.css')?>">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css')?>">
       
        <!--

TemplateMo 575 Leadership Event

https://templatemo.com/tm-575-leadership-event

-->
    </head>
    
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                    <img src="<?php echo base_url('assets/images/Black White Minimal Circle Framed Monogram Logo.png')?>" width="80PX"></i>
    
                    <span class="brand-text"><br>Masterplan <br> Agency</span>
                </a>

                <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#event">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#team">Team</a>
                        </li>
                
                        <?php if($this->session->has_userdata('USERNAME')){ ?>
                        <li class="nav-item">
                        <a class="nav-link custom-btn btn d-none d-lg-block" href="#"><?php echo $this->session->userdata('USERNAME'); ?></a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link custom-btn btn d-none d-lg-block" href="<?php echo base_url('index.php/login/logout')?>" onclick="if(!confirm('Anda Yakin Akan Log Out?')) {return false}">Sign Out</a>
                        </li>

                        <?php }else{ ?>
                        <li class="nav-item">
                        <a class="nav-link custom-btn btn d-none d-lg-block" href="<?php echo base_url('index.php/login')?>">Login</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link custom-btn btn d-none d-lg-block" href="<?php echo base_url('index.php/register')?>">Sign Up</a>
                        </li>
                        <?php } ?>
                    </ul>
                <div>
            </div>
        </nav>

        <section class="hero" id="home">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-5 col-12 m-auto">
                                                        <div class="hero-text">
                                                            <br><br><br><br><br><br><br><br><br><br><br><br>
                                                            <h1 class="text-white mb-4"><u class="text-info">EVENT</u>ORGANIZER</h1>

                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <span class="date-text">July 12 to 18, 2022</span>
                                                                
                                                                <span class="location-text">Times Square, NY</span>
                                                            </div>

                                                            <a href="#about" class="custom-link bi-arrow-down arrow-icon"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="video-wrap">
                                                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                                    <source src="<?php echo base_url('assets/videos/pexels-pavel-danilyuk-8716790.mp4')?>" type="video/mp4">

                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
        </section>

        <section class="highlight">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="highlight-thumb">
                                                            <img src="<?php echo base_url('assets/images/highlight/Untitled.png')?>" class="highlight-image img-fluid" alt="">

                                                            <div class="highlight-info">
                                                                <h3 class="highlight-title">Seminar Sukses kuliah di Luar negeri</h3>

                                                                <a href="https://youtu.be/3HHjXN8LLtQ" class="bi-youtube highlight-icon"></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="highlight-thumb">
                                                            <img src="<?php echo base_url('assets/images/highlight/Untitled1.png')?>" class="highlight-image img-fluid" alt="">

                                                            <div class="highlight-info">
                                                                <h3 class="highlight-title">Workshop Konsep Digital Marketing </h3>

                                                                <a href="https://youtu.be/eHc5YujKT3A" class="bi-youtube highlight-icon"></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="highlight-thumb">
                                                            <img src="<?php echo base_url('assets/images/highlight/Untitled3.png')?>" class="highlight-image img-fluid" alt="">

                                                            <div class="highlight-info">
                                                                <h3 class="highlight-title">Bazar UMKM Jatim Sidoarjo 2022</h3>

                                                                <a href="https://youtu.be/boCEYyUYYG0" class="bi-youtube highlight-icon"></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
        </section>

        <section class="about section-padding" id="about">

                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-10 col-12">
                                                    <h2 class="mb-4">Tentang <u class="text-info">Kami</u></h2>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <section class="about_history_area section_gap">
                                        <div id="about">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 d_flex align-items-center">
                                                    <div class="about_content ">
                                                        <p>Masterplan Agency memberikan pelayanan / jasa event organizer (EO) terlengkap di indonesia, sesuai dengan kebutuhan anda. Sebagai perusahaan dengan legalitas dan profesionalitas dalam menyelenggarakan bermacam event indoor atau outdoor sejak 2022, banyak event seperti bazaar produk perusahaan, wisuda kuliah, artis, hingga event outbound dirancang dengan yang istimewa dan menarik.  </p>
                                                        <p>Seluruh team event organizer (EO) Masterplan Agency siap memberikan konsep kegiatan sesuai dengan kebutuhan klien serta membuka dialog / diskusi untuk bertukar ide dan konsep kegiatan yang akan diselenggarakan nantinya. Cukup banyak perusahaan dan organisasi yang sudah mempercayakan event gathering, launching, virtual event, webinar & seminar mereka, sesuai dengan visi kami sebagai EO Jakarta yang handal</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="img-fluid" src="<?php echo base_url('assets/images/avatar/crew.jpeg')?>" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
        </section>
        <br><br><br><br>

        <!-- ***** Blog Start ***** -->
        <section class="section" id="event">
            <div class="container">

                <!--daftar event-->
                
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                
                            </div>
                        </div> <!-- row -->
                    </div>
                <!-- Team Section Start -->
    <section id="kegiatan" class="section-padding bg-gray">
    <div class="section-title text-center pb-50">
                                    <h2 class="mb-5 text-center">Event  <u class="text-info">Information</u></h2>
                                </div> <!-- section title -->
        <div class="row">
            <!-- Team Item Starts -->                                                                                                                                           
            <?php foreach($list_kegiatan as $kegiatan){?>
                <div class="col-4">
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
              <h5><strong><?=$kegiatan->judul?></strong></h5><br>
                <img class="img-fluid" src="<?php echo base_url().'/dist/img/'.$kegiatan->foto_flyer?>" alt="" style="height:50%;">
                <div class="contetn">
                <div class="info-text">
                  <p>Kapasitas  : <?=$kegiatan->kapasitas?></p>
                  <p>Harga Tiket : <?=$kegiatan->harga_tiket?></p>
                  <p>Tanggal  : <?=$kegiatan->tanggal?></p>
                  <p>Narasumber  : <?=$kegiatan->narasumber?></p>
                  <p>Tempat  : <?=$kegiatan->tempat?></p>
                  <br>
                <?php if($this->session->has_userdata('ID')){ ?>
                  <a href="<?php echo base_url('index.php/home/insert?idkegiatan='.$kegiatan->id)?>" class="btn btn-danger">Daftar</a>
                <?php }else{ }?>
                <br><br><br>
                </div>
              </div>
            </div>
            </div>

            </div>
            <?php } ?>
            <!-- Team Item Ends -->
        </div>
      </div>
    </section>
    <!-- Team Section End -->










                <!--** What We do**-->
                <section id="section_5" class="services-area pt-125 pb-130 gray-bg">
            </div>
        </section>
        <!-- ***** Blog End ***** -->
            
        <section class="speakers section-padding" id="team">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-5 text-center">Team <u class="text-info">Management</u></h2>


                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="speakers-thumb speakers-thumb-small">
                                            <img src="<?php echo base_url('assets/images/avatar/faiz.jpg')?>" class="img-fluid speakers-image" alt="">

                                            <div class="speakers-info">
                                                <h5 class="speakers-title mb-0">Faiz</h5>

                                                <p class="speakers-text mb-0">Event Planner</p>

                                                <ul class="social-icon">
                                                    
                                                    <li><a href="https://www.instagram.com/faiz.dlhq/" class="social-icon-link bi-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="speakers-thumb speakers-thumb-small">
                                            <img src="<?php echo base_url('assets/images/avatar/devan.jpg')?>" class="img-fluid speakers-image" alt="">

                                            <div class="speakers-info">
                                                <h5 class="speakers-title mb-0">Devan</h5>

                                                <p class="speakers-text mb-0">Startup Coach</p>

                                                <ul class="social-icon">
                                                    <li><a href="https://www.instagram.com/devandioo_/" class="social-icon-link bi-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="speakers-thumb speakers-thumb-small">
                                            <img src="<?php echo base_url('assets/images/avatar/nisa.jpg')?>" class="img-fluid speakers-image" alt="">

                                            <div class="speakers-info">
                                                <h5 class="speakers-title mb-0">Nisa</h5>

                                                <p class="speakers-text mb-0">Event Manager</p>

                                                <ul class="social-icon">
                                                
                                                    <li><a href="https://www.instagram.com/nisalamin_157/" class="social-icon-link bi-instagram"></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="speakers-thumb speakers-thumb-small">
                                            <img src="<?php echo base_url('assets/images/avatar/fayyaza.jpg')?>" class="img-fluid speakers-image" alt="">

                                            <div class="speakers-info">
                                                <h5 class="speakers-title mb-0">Fayyaza</h5>

                                                <p class="speakers-text mb-0">Top Level Speaker</p>

                                                <ul class="social-icon">
                                                    <li><a href="https://www.instagram.com/fayyazanaira85/" class="social-icon-link bi-instagram"></a></li>

                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="venue section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-5">Here you go <u class="text-info">OurVenue</u></h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.091461689997!2d-73.9866630916883!3d40.758001294831736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855a96da09d%3A0x860bf5a5e1a00a68!2sTimes%20Square%2C%20New%20York%2C%20NY%2010036%2C%20USA!5e0!3m2!1sen!2ssg!4v1643035529098!5m2!1sen!2ssg" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="venue-thumb bg-white shadow-lg">
                                
                                <div class="venue-info-title">
                                    <h2 class="text-white mb-0">Depok, Margonda</h2>
                                </div>

                                <div class="venue-info-body">
                                    <h4 class="d-flex">
                                        <i class="bi-geo-alt me-2"></i> 
                                        <span>Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Kelurahan, RT.4/RW.1, Srengseng Sawah, Jawa Barat</span>
                                    </h4>

                                    <h5 class="mt-4 mb-3">
                                        <a href="mailto:hello@yourgmail.com">
                                            <i class="bi-envelope me-2"></i>
                                            masterplanagency@company.com
                                        </a>
                                    </h5>

                                    <h5 class="mb-0">
                                        <a href="tel: 305-240-9671">
                                            <i class="bi-telephone me-2"></i>
                                            +62 878 - 2888 - 9910
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="index.html" class="navbar-brand">
                                <i class="bi-bullseye brand-logo"></i>
                                <span class="brand-text">Masterplan <br> Agency</span>
                            </a>

                            <ul class="social-icon ms-auto">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
 
                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                        
                    <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © 2022 Leadership Event Co., Ltd. 
                            
                            <br>All Rights Reserved. 
          
          					<br><br>Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>

                            <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.sticky.js')?>"></script>
        <script src="<?php echo base_url('assets/js/click-scroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

        <script src="<?php echo base_url('assets/assetsjs/vendor/modernizr-3.6.0.min.js')?>"></script>
        <script src="<?php echo base_url('assets/assets/js/vendor/jquery-1.12.4.min.js')?>"></script>

    <!--====== Bootstrap js ======-->
        <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>

    <!--====== WOW js ======-->
        <script src="<?php echo base_url('assets/assetsjs/wow.min.js')?>"></script>

    <!--====== Slick js ======-->
        <script src="<?php echo base_url('assets/assets/js/slick.min.js')?>"></script>

    <!--====== Scrolling Nav js ======-->
         <script src="<?php echo base_url('assets/assets/js/scrolling-nav.js')?>"></script>
         <script src="<?php echo base_url('assets/assets/js/jquery.easing.min.js')?>"></script>

    <!--====== Aos js ======-->
        <script src="<?php echo base_url('assets/assets/js/aos.js')?>"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--====== Main js ======-->
        <script src="<?php echo base_url('assets/assets/js/main.js')?>"></script>

    </body>
</html>