<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Proje duzenleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/projectupdate');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Proje adi_tr</label>
                    <input type="text" name="name_tr"  class="form-control" value="<?php echo $melumat->project_title_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Proje adi_En</label>
                    <input type="text" name="name_en"  class="form-control" value="<?php echo $melumat->project_title_en ?>">

                </div>



        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Proje resmi</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud Resim</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->project_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Duzenlemezseniz resim secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/project');?>" class="btn btn-warning" >Vazgec
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Guncelle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>