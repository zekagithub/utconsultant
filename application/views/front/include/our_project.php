<section class="latest-project-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="sec-title">
                    <div class="title"><?php echo $this->lang->line('our'); ?></div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="text">
                    <p>                    <?php echo $this->lang->line('sir'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-carousel owl-carousel owl-theme">
                    <!--Start single project-->
                    <?php $melumat=projectcek();


                    foreach ($melumat as $melumat):   ?>
                    <div class="single-project">
                        <div class="img-holder">
                            <img src="<?php echo base_url();echo $melumat ->project_image;  ?>" alt="">
                            <div class="top-overlay">
                                <div class="title">
                                    <div class="box">
                                        <h3>
                                            <a>

                                                <?php if($this->session->userdata('lang')=='tr'):echo $melumat->project_title_tr;

                                                else: echo $melumat ->project_title_en;
endif;
                                                ?>

                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-overlay">
                                <div class="box">
                                    <div class="read-more-button">
                                        <a class="thm-clr">Daha Fazla<span class="icon-arrows"></span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
               <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
