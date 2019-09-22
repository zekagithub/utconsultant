<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Slider ekleme  sayfasi</h3>
        </div>
        <!-- /.box-header -->
        <style>
            div label{
                color: black;
                font-size:17px;

            }
            div.a{
                padding-left: 40px;
            }
        </style>
        <div style="padding-left: 40px;" class="box-body">




            <form method="post" action="<?= base_url('back/slideradded');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Slider isimi_tr</label>
                    <input type="text" name="name_tr"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Slider isimi_En</label>
                    <input type="text" name="name_en"  class="form-control">

                </div>

                <div class="form-group">
                    <label>Slider aciklama_tr</label>
                    <input type="text" name="desc_tr"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Slider aciklama_En</label>
                    <input type="text" name="desc_en"  class="form-control">

                </div>

                <div class="form-group">
                    <label>Slider alt link ismi_tr</label>
                    <input type="text" name="linkname_tr"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Slider alt link ismi_En</label>
                    <input type="text" name="linkname_en"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Slider alt linki url belirleyin</label>
                    <span style="color: blue;">mesela:<b>about</b></span>
                    <input type="text" name="linkurl"  class="form-control">

                </div>


        </div>

    </div>

    <div style="padding-left: 40px;" class="form-group">
        <label>Slider Resmi</label>
        <input type="file" name="image"  class="form-control">

    </div>


    <div style="padding-left: 40px;" class="form-group">
        <a type="submit" href="<?=base_url('back/slider');?>" class="btn btn-warning" >Vazgec
        </a>
        <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

    </div>



    </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>
<?php
