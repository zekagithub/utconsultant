<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title><?php if (isset($head)):echo $head;endif;   ?></title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta itemprop="name" content="<?php echo $melum->site_title; ?>|<?php echo $melum->site_desc; ?>">
    <meta name="keywords" content="<?php echo $melum->site_keywords;  ?>">
    <meta name="description" content="<?php echo $melum->site_desc; ?>">
    <!-- Open Graph data -->
    <meta property="og:title" content=" <?php echo $melum->site_title; ?>|<?php echo $melum->site_desc; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo $melum->site_url; ?>">
    <meta property="og:description" content="<?php echo $melum->site_title; ?>|<?php echo $melum->site_desc; ?>">
    <meta property="og:site_name" content="<?php echo $melum->site_title; ?>">
    <meta property="article:author" content="<?php echo $melum->site_title; ?>">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/color-themes/navy-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/front/');?>images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/front/');?>images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/front/');?>images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/front/');?>http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/html5shiv.js"></script>
    <![endif]-->



</head>
<body>
<div class="boxed_wrapper">


    <!-- Top bar area -->
    <section class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="top-bar clearfix">
                        <!--Start top left content-->
                        <div class="top-left-content clearfix float-left">
                            <p><span class="icon-mountain thm-clr"></span>AIM Texas Trading LLC’ e bağlı bir kuruluştur... </p>
                        </div>
                        <!--End top left content-->
                        <!--Start top right content-->
                        <div class="top-right-content clearfix float-right">
                            <div class="top-social-box">
                                <ul class="social-links">

                                    <li><a href="<?php echo base_url('assets/front/');?>#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo base_url('assets/front/');?>#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                            <div class="header-dropdown lang-dropdown">
                                <?php  if ($this->session->userdata('lang')!='en') : ?>
                                    <a href="<?php echo base_url('front/dildeyisdir/en') ?>">
                                        <img src="<?php echo base_url('assets/front/');?>images/icon-english-5.jpg" style="width: 30px;height: 25px; " alt="English">
                                        <span style="color: white;">ENG</span>
                                    </a>
                                <?php else: ?>

                                    <ul class="header-dropdownmenu">
                                        <li>
                                            <a href="<?php echo base_url('front/dildeyisdir/tr') ?>">
                                                <img src="<?php echo base_url('assets/front/');?>images/tr.png" style="width: 30px;height: 25px;" alt="turkish">
                                                <span style="color: white;">TUR</span>
                                            </a>
                                        </li>
                                    </ul>
                                <?php endif;  ?>
                            </div>
                        </div>
                        <!--End top right content-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Top bar area -->

    <!--Start header area-->
    <header class="header-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="inner-content clearfix">
                        <div class="header-left float-left">
                            <div class="logo">
                                <a href="<?php echo base_url('home');  ?>">
                                    <img src="<?php echo base_url('assets/front/');?>images/resources/logo.png" alt="Utconsultant Logo">
                                </a>
                            </div>
                        </div>

                        <div class="header-middle clearfix float-left">
                            <!--Start mainmenu-->
                            <nav class="main-menu clearfix float-left">
                                <div class="navbar-header clearfix">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li <?php if ($this->uri->segment(1)=='home'){echo 'class=current';}  ?>
                                        ><a href="<?php echo base_url('home');  ?>"><?php echo $this->lang->line('ana');  ?></a></li>

                                        <li <?php if ($this->uri->segment(1)=='about'){echo 'class=current';}  ?> ><a href="<?php echo base_url("about");  ?>"><?php echo $this->lang->line('hak');  ?></a>
                                        </li>
                                        <li <?php if ($this->uri->segment(1)=='services'){echo 'class=current'; } ?> ><a href="<?php echo base_url('services');  ?>"><?php echo $this->lang->line('hizmet');  ?></a>

                                        </li>
                                        <li <?php if ($this->uri->segment(1)=='blog'){echo 'class=current'; } ?> ><a href="<?php echo base_url('blog');  ?>"><?php echo $this->lang->line('haber');  ?></a>

                                        </li>
                                        <li <?php if ($this->uri->segment(1)=='carier'){echo 'class=current';}  ?> ><a href="<?php echo base_url('carier');  ?>"><?php echo $this->lang->line('kariyer');  ?></a>

                                        </li>
                                        <li <?php if ($this->uri->segment(1)=='contact'){echo 'class=current'; } ?>><a href="<?php echo base_url("contact");  ?>"><?php echo $this->lang->line('ilet');  ?></a></li>
                                    </ul>

                                </div>
                            </nav>
                            <!--End mainmenu-->
                        </div>
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!--End header area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/front/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="title float-left">
                        <h1><?php echo $this->lang->line('eko'); ?></h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul>
                            <li><a href="<?php echo base_url('assets/front/');?>index.html"><?php echo $this->lang->line('ana'); ?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active"><?php echo $this->lang->line('haber'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start blog area-->
    <section id="blog-area" class="blog-default-area">
        <div class="container">
            <div class="row">
                <!--Start single blog item-->
                <?php foreach ($melumat as $xeber):?>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="<?php echo base_url();echo $xeber->blog_image;  ?>" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p><?php if($this->session->userdata('lang')=='tr'):echo substr( $xeber->blog_desc_tr,0,110);else:

                                                    echo substr( $xeber->blog_desc_en,0,110);
                                                endif;?></p>
                                            <a href="<?php echo base_url('blog/');echo $xeber->blog_sef_tr;


                                            ?>">

                                                <?php echo $this->lang->line('davam');  ?><span class="icon-arrows"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">    <a href="<?php echo base_url('blog/');echo $xeber->blog_sef_tr;


                                    ?>"><?php if($this->session->userdata('lang')=='tr'):echo $xeber->blog_title_tr;else:

                                            echo $xeber->blog_title_en;

                                        endif;?></a></h3>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><a ><span class="icon-time thm-clr"></span><?php echo $xeber->blog_date; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php  endforeach;  ?>
                <!--End single blog item-->

                <!--End single blog item-->




            </div>
        </div>
    </section>
    <!--End blog area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <div class="copyright-text pull-right">
                            <p>UTCONSULTANT © 2019<br>
                            </p>
                        </div>
                        <div class="pull-left">
                            <span>Created by</span><a  href="https://vhproduction.com/" target="_blank"><img src="<?php echo base_url('assets/front/');?>svg/vhlogo.svg"  width="147" height="41" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End footer bottom area-->
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>

<div class="color-palate">


    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/teal-theme.css"></span>
            <span class="palate navy-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/navy-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/yellow-theme.css"></span>
            <span class="palate blue-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/blue-theme.css"></span>
            <span class="palate purple-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/purple-theme.css"></span>
            <span class="palate olive-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/olive-theme.css"></span>
            <span class="palate red-color" data-theme-file="<?php echo base_url('assets/front/'); ?>css/color-themes/red-theme.css"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div>

<!-- main jQuery -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.js"></script>
<!-- Wow Script -->
<script src="<?php echo base_url('assets/front/');?>js/wow.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url('assets/front/');?>js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.countTo.js"></script>
<script src="<?php echo base_url('assets/front/');?>js/jquery.appear.js"></script>
<!-- owl carousel -->
<script src="<?php echo base_url('assets/front/');?>js/owl.js"></script>
<!-- validate -->
<script src="<?php echo base_url('assets/front/');?>js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.mixitup.min.js"></script>
<!-- isotope script-->
<script src="<?php echo base_url('assets/front/');?>js/isotope.js"></script>
<!-- Easing -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.easing.min.js"></script>


<script src="<?php echo base_url('assets/front/');?>js/map-helper.js"></script>
<!-- video responsive script -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="<?php echo base_url('assets/front/');?>assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo base_url('assets/front/');?>assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- jQuery PrettyPhoto js -->
<script src="<?php echo base_url('assets/front/');?>js/jquery.prettyPhoto.js"></script>
<!-- jQuery timepicker js -->
<script src="<?php echo base_url('assets/front/');?>assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo base_url('assets/front/');?>assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>

<!--Color Switcher-->
<script src="<?php echo base_url('assets/front/');?>js/color-settings.js"></script>



<script src="<?php echo base_url('assets/front/');?>js/custom.js"></script>



</body>

</html>