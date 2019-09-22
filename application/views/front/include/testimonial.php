<section class="testimonial-area parallax-bg-one" style="background-image: url(images/parallax-background/testimonial-bg.jpg);">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-outer">
                    <div >
                        <!--Start testimonial block one-->
                        <div class="testimonial-block-one">

                            <div class="text-holder">

                                <p><?php echo $this->lang->line('biz'); ?></p>

                            </div>
                        </div>
                        <!--End testimonial block one-->


                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="brand">
                    <ul>
<?php  $testmin=testmincek(); foreach ($testmin as $melumat): ?>
                        <li>
                            <a >
                                <img src="<?php echo base_url();echo $melumat->testmin_image;  ?>" alt="<?php echo $melumat->testmin_name_en ?>">
                            </a>
                        </li>
                        <?php  endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
