<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Ortak ekleme  sayfasi</h3>
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




            <form method="post" action="<?= base_url('back/testminadded');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ortak adi_tr</label>
                    <input type="text" name="name_tr"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Ortak adi_En</label>
                    <input type="text" name="name_en"  class="form-control">

                </div>


        </div>

    </div>

    <div style="padding-left: 40px;" class="form-group">
        <label>Ortak foto</label>
        <input type="file" name="image"  class="form-control">

    </div>


    <div style="padding-left: 40px;" class="form-group">
        <a type="submit" href="<?=base_url('back/testmin');?>" class="btn btn-warning" >Imtina
        </a>
        <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

    </div>



    </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>
<?php
