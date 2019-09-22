<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title><?= $melumat->site_title; ?></title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta itemprop="name" content="<?php echo $melumat->site_title; ?>|<?php echo $melumat->site_desc; ?>">
    <meta name="keywords" content="<?php echo $melumat->site_keywords;  ?>">
    <meta name="description" content="<?php echo $melumat->site_desc; ?>">
    <!-- Open Graph data -->
    <meta property="og:title" content=" <?php echo $melumat->site_title; ?>|<?php echo $melumat->site_desc; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo $melumat->site_url; ?>">
    <meta property="og:description" content="<?php echo $melumat->site_title; ?>|<?php echo $melumat->site_desc; ?>">
    <meta property="og:site_name" content="<?php echo $melumat->site_title; ?>">
    <meta property="article:author" content="<?php echo $melumat->site_title; ?>">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');  ?>css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');  ?>css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');  ?>css/color-switcher-design.css">
    <!--Color Themes-->

    <link rel="stylesheet" href="<?php echo base_url('assets/front/');  ?>css/color-themes/navy-theme.css" id="theme-color-file">
    <!-- Favicon -->

    <base href="./" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/front/');  ?>images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/front/');  ?>images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/front/');  ?>images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/front/');  ?>http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo base_url('assets/front/');  ?>js/html5shiv.js"></script>
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
                                    <img src="<?php echo base_url('assets/front/');  ?>images/resources/logo.png" alt="Awesome Logo">
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
                                    <form method="post" action="">
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
