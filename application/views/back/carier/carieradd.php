<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Karyer ekleme  sayfasi</h3>
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

            <form method="post" action="<?= base_url('back/carieradded');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Karyer baslik_tr</label>
                    <input type="text" name="title_tr"  class="form-control" >
                </div>
                <div class="form-group">
                    <label>karyer baslik_En</label>
                    <input type="text" name="title_en"  class="form-control" >

                </div>


                <div class="form-group">
                    <label>Karyer text_Tr</label>
                    <textarea rows="3" name="description_tr" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Karyer text_En</label>
                    <textarea rows="3" name="description_en" id="editor1" class="form-control"></textarea>

                </div>

        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Karyer resim</label>
            <input type="file" name="image"  class="form-control">

        </div>



        <div class="form-group">
            <a type="submit" href="<?=base_url('back/carier');?>" class="btn btn-warning" >Vazgec
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Ekle</button>

        </div>



        </form>

    </div>
    </div>





<?php $this->load->view('back/include/footer');?>