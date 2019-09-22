<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Proje ekleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/projectadded');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Proje adi_tr</label>
                    <input type="text" name="name_tr"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Proje adi_En</label>
                    <input type="text" name="name_en"  class="form-control">

                </div>


        </div>

    </div>

    <div style="padding-left: 40px;" class="form-group">
        <label>Proje Resmi</label>
        <input type="file" name="image"  class="form-control">

    </div>


    <div style="padding-left: 40px;" class="form-group">
        <a type="submit" href="<?=base_url('back/project');?>" class="btn btn-warning" >Vazgec
        </a>
        <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

    </div>



    </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>
<?php
