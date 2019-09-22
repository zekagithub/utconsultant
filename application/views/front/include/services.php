
<section class="services-area">

    <div class="container">
        <div class="sec-title text-center">
            <div class="title"><?php echo $this->lang->line('uzman');  ?></div>
            <?php $melumata=servicestitlecek();if ($this->session->userdata('lang')=='tr'):echo $melumata->services_top_title_tr;
            else:echo $melumata->services_top_title_en;
            endif;

            ?>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <!--Start single service item-->
<?php foreach ($servic as $servic):    ?>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="single-service-item">
                    <div class="inner-content">
                        <div class="img-holder">
                            <img src="<?php echo base_url();echo $servic->services_image;  ?>" style="width: 499px; height: 297px;"  alt="Awesome Image">
                        </div>
                        <div class="title-holder">
                            <div class="icon">
                                <?php if($servic->services_name_tr=='Planlama'): ?>
                                <span class="icon-man thm-clr"></span>
                                <?php elseif ($servic->services_name_tr=='MÜHENDİSLİK') : ?>
                                    <span class="icon-business thm-clr"></span>
                                <?php elseif ($servic->services_name_tr=='TASARIM/YAPIM') : ?>
                           <span class="icon-computer-1 thm-clr"></span>
                                <?php elseif ($servic->services_name_tr=='MİMARİ') : ?>
                                    <span class="icon-cogwheel-2 thm-clr"></span>
                                <?php elseif ($servic->services_name_tr=='YAPI') : ?>
                                    <span class="icon-luxury thm-clr"></span>
                                <?php elseif ($servic->services_name_tr=='PROGRAM YÖNETİMİ') : ?>
                                    <span class="icon-business thm-clr"></span>


                                <?php  endif; ?>
                            </div>
                            <h3><?php if($this->session->userdata('lang')=='tr'):echo $servic->services_name_tr;else:

echo $servic->services_name_en;

                                endif;?></h3>
                        </div>
                    </div>
                    <div class="overlay-content-top">
                        <div class="title-holder">


                        </div>
                        <div class="text-holder">



                            <p> <?php if($this->session->userdata('lang')=='tr'):
   $axtar=',';

                                     $a=$servic->services_desc_tr;
if (strpos($a,$axtar)){

    $value=explode(',',$a);
    foreach ($value as $val){
        echo '•'.$val.'<br>';
    }
}else{
    echo $a;
}
endif;
?>

<br> </p>
                        </div>
                    </div>
                    <div class="overlay-content-bottom">
                        <div class="read-more-button">
                            <a><?php if($this->session->userdata('lang')=='tr'):echo $servic->services_name_tr;else:

                                    echo $servic->services_name_en;

                                endif;?><span class="icon-arrows"></span></a>
                        </div>
                    </div>
                </div>
            </div>
<?php endforeach;   ?>
            <!--End single service item-->

        </div>
    </div>
</section