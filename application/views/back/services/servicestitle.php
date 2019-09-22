<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Hizmet ust baslik ekeleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/servicestitleupdate');?>" >
                <div class="form-group">
                    <label>Hizmet ust baslik_tr</label>
                    <input type="text" name="top_title_tr"  class="form-control" value="<?php echo $melumat->services_top_title_tr ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Hizmet ust baslik_En</label>
                    <input type="text" name="top_title_en"  class="form-control" value="<?php echo $melumat->services_top_title_en ?>">

                </div>



        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <a type="submit" href="<?=base_url('back/services');?>" class="btn btn-warning" >Vazgec
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Guncelle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>