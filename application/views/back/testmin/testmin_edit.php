<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Ortak duzenleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/testminupdate');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Ortak adi_tr</label>
                    <input type="text" name="name_tr"  class="form-control" value="<?php echo $melumat->testmin_name_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Ortak adi_En</label>
                    <input type="text" name="name_en"  class="form-control" value="<?php echo $melumat->testmin_name_en ?>">

                </div>



        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Ortak foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud Resim</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->testmin_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Duzenlemezseniz foto secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/testmin');?>" class="btn btn-warning" >Imtina
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Guncelle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>