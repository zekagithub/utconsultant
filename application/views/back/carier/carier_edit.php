<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Karyer duzenleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/carierupdate');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Karyer baslik_tr</label>
                    <input type="text" name="desc_title_tr"  class="form-control" value="<?php echo $melumat->carier_desc_title_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>karyer baslik_En</label>
                    <input type="text" name="desc_title_en"  class="form-control" value="<?php echo $melumat->carier_desc_title_en ?>">

                </div>


                <div class="form-group">
                    <label>Karyer text_Tr</label>
                    <textarea rows="3" name="description_tr" id="editor1" class="form-control"><?php echo $melumat->carier_desc_tr ?></textarea>
                </div>
                <div class="form-group">
                    <label>Karyer text_En</label>
                    <textarea rows="3" name="description_en" id="editor1" class="form-control"><?php echo $melumat->carier_desc_en ?></textarea>

                </div>

        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Karyer foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud Sekil</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->carier_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Duzenlemezseniz foto secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/carier');?>" class="btn btn-warning" >Vazgec
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Guncelle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>