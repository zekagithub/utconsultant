<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/home')?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Ana sayfa</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i>
                <span>Ayarlar</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('back/settings/')?>">Site Ayarlari</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/adminsettings');?>">Admin Giris</a>

            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/about')?>">
                <i class="fa fa-info" ></i>

                <span>Hakkimizda</span>
            </a>
        </li>        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/services')?>">
                <i class="fas fa-business-time"></i>

                <span>Hizmetler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/slider/')?>">
                <i class="fas fa-camera"></i>                <span>Slider</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/carier')?>">
                <i class="fas fa-user-md"></i>
                <span>Karyer</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/testmin')?>">
                <i class="fas fa-shopping-bag"></i>
                <span>Ortaklar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/project')?>">
                <i class="fas fa-shopping-bag"></i>
                <span>Projeler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/blog/')?>">
                <i class="fas fa-newspaper"></i>
                <span>Haberler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/messages/')?>">
                <i class="fa fa-envelope"></i>

                <span>Mesajlar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/cixis/')?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Cikis</span>
            </a>
        </li>



    </ul>


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('back/home')?>">Anasayfa</a>
                </li>
            </ol>



            <hr>


        </div>