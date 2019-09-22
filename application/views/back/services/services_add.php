<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Hizmet ekleme  sayfasi</h3>
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




        <form method="post" action="<?= base_url('back/servicesadded');?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Hizmet adi_tr</label>
                <input type="text" name="name_tr"  class="form-control">

            </div>
            <div class="form-group">
                <label>Hizmet adi_En</label>
                <input type="text" name="name_en"  class="form-control">

            </div>

            <div class="form-group">
                <label>Hizmet ayrinti_Tr</label><br>
                <span style="color:blue">ayrintilari virgulle ayiriniz</span>
                <textarea rows="3" name="description_tr" id="editor1" class="form-control"></textarea>

            </div>
            <div class="form-group">
                <label>Hizmet ayrinti_en</label><br>
                <span style="color:blue">ayrintilari virgulle ayiriniz</span>

                <textarea rows="3" name="description_en" id="editor1" class="form-control"></textarea>

            </div>
            <div class="form-group">
                <label><a href="https://fontawesome.com/icons" target="_blank">Icon secimi ucun fontawesome linki</a></label><br>
                <input type="text" placeholder="kodu yazin" name="icon">
            </div>



    </div>

</div>

    <div style="padding-left: 40px;" class="form-group">
        <label>Hizmet foto</label>
        <input type="file" name="image"  class="form-control">

    </div>


    <div style="padding-left: 40px;" class="form-group">
        <a type="submit" href="<?=base_url('back/services');?>" class="btn btn-warning" >Imtina
        </a>
        <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

    </div>



    </form>

</div>
</div>





<?php $this->load->view('back/include/footer');?>
