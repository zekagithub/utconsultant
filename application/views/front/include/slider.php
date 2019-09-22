<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php foreach ($slider as $slider):  ?>
            <li data-transition="fade">
                <img src="<?php echo base_url();echo $slider->slider_image;  ?>" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                <div class="tp-caption  tp-resizeme"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="180"
                     data-transform_idle="o:1;"
                     data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="700">
                    <div class="slide-content left-slide">
                        <?php  ?>
                        <div class="big-title"> <?php
                            if ($this->session->userdata('lang')=='tr') {
                                $a = $slider->slider_name_tr;
                                $c = explode(' ', $a);
                                foreach ($c as $d) {
                                    echo $d . '<br>';
                                }
                            }else{
                                $b = $slider->slider_name_en;
                                $e = explode(' ', $b);
                                foreach ($e as $f) {
                                    echo $f.'<br>';
                                }
                            }
                            ?> </div>
                    </div>
                </div>

                <div class="tp-caption  tp-resizeme"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="325"
                     data-transform_idle="o:1;"
                     data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="2500">
                    <div class="slide-content left-slide">
                        <div class="text"><?php
                            if ($this->session->userdata('lang')=='tr') {



                                    echo $slider->slider_desc_tr;

                            }else{


                                echo $slider->slider_desc_en;
                            }
                            ?> </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="453"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="3500">
                    <div class="slide-content left-slide">
                        <div class="btns-box">
                            <a href="<?php echo base_url();echo $slider->slider_link_url  ?>" class="btn-one thm-bg-clr"><?php if ($this->session->userdata('lang')=='tr'):echo $slider->slider_link_name_tr;
                            else:echo $slider->slider_link_name_en;
                                endif;

                            ?></a>
                        </div>
                    </div>
                </div>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>