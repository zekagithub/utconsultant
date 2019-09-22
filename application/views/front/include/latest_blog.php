<section class="latest-blog-area">
    <div class="container inner-content">
        <div class="sec-title text-center">
            <div class="title"><?php echo $this->lang->line('hab'); ?></div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <!--Start single blog item-->

            <?php $xebercek=xebercek(); foreach ($xebercek as $xeber):?>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="<?php echo base_url();echo $xeber->blog_image;  ?>" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <p><?php if($this->session->userdata('lang')=='tr'):echo substr( $xeber->blog_desc_tr,0,110);
                                    else:
                                         echo substr($xeber->blog_desc_en,0,100);

                                        endif;?></p>
                                    <a href="<?php echo base_url('blog/');echo $xeber->blog_sef_tr;


                                    ?>"><?php echo $this->lang->line('davam');  ?><span class="icon-arrows"></span></a>
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

        </div>
    </div>
</section>
