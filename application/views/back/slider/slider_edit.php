<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Slider duzenleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/sliderupdate');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>slider adi_tr</label>
                    <input type="text" name="name_tr"  class="form-control" value="<?php echo $melumat->slider_name_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>slider adi_En</label>
                    <input type="text" name="name_en"  class="form-control" value="<?php echo $melumat->slider_name_en ?>">

                </div>
                <div class="form-group">
                    <label>Slider aciklama_tr</label>
                    <input type="text" name="desc_tr"  class="form-control" value="<?php echo $melumat->slider_desc_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Slider aciklama_En</label>
                    <input type="text" name="desc_en"  class="form-control" value="<?php echo $melumat->slider_desc_en ?>">

                </div>
                <div class="form-group">
                    <label>Slider alt link ismi_tr</label>
                    <input type="text" name="linkname_tr"  class="form-control" value="<?php echo $melumat->slider_link_name_tr;  ?>">

                </div>
                <div class="form-group">
                    <label>Slider alt link ismi_En</label>
                    <input type="text" name="linkname_en"  class="form-control" value="<?php echo $melumat->slider_link_name_en;  ?>">

                </div>
                <div class="form-group">
                    <label>Slider alt linki url belirleyin</label>
                    <span style="color: blue;">mesela:<b>about</b></span>
                    <input type="text" name="linkurl"  class="form-control" value="<?php echo $melumat->slider_link_url;  ?>">

                </div>


        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Slider resmi</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud Resim</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->slider_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Duzenlemezseniz resim secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/slider');?>" class="btn btn-warning" >Vazgec
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Guncelle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>