<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Hizmet duzenleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/servicesupdate');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Hizmet adi_tr</label>
                    <input type="text" name="title_tr"  class="form-control" value="<?php echo $melumat->services_name_tr ?>" >
<input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Hizmet adi_En</label>
                    <input type="text" name="title_en"  class="form-control" value="<?php echo $melumat->services_name_en ?>">

                </div>

                <div class="form-group">
                    <label>Hizmet ayrinti_Tr</label><br>
                    <span style="color:blue">ayrintilari virgulle ayiriniz</span>

                    <textarea rows="3" name="description_tr" id="editor1" class="form-control"><?php echo $melumat->services_desc_tr ?></textarea>

                </div>
                <div class="form-group">
                    <label>Hizmet ayrinti_En</label><br>
                    <span style="color:blue">ayrintilari virgulle ayiriniz</span>

                    <textarea rows="3" name="description_en" id="editor1" class="form-control"><?php echo $melumat->services_desc_en ?></textarea>

                </div>
                <div class="form-group">
                    <label><a href="https://fontawesome.com/icons" target="_blank">Icon secimi ucun fontawesome linki</a></label><br>
                    <input type="text"   placeholder="kodu yazin"  name="icon" class="form-control" >
                </div>

        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Haber foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud Sekil</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->services_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Duzenlemezseniz foto secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/services');?>" class="btn btn-warning" >Imtina
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>