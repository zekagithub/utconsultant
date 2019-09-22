<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Mesaj sehifesi</h3>
        </div>
        <!-- /.box-header -->


        <form class="form-horizontal" method="post" action="<?= base_url('back/adminsettingsupdate');  ?>" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Eski Giris Ismi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"  value="<?php echo $melumat->email; ?>" disabled >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Yeni Giris Ismi</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Eski Parola</label>
                    <div class="col-sm-10">
                        <input type="password" name="adress" class="form-control" value="<?php echo $melumat->password; ?>"  disabled >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Yeni parola</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>



                <div class="form-group">
                    <a type="submit" href="<?=base_url('back/settings');?>" style="margin-left: 17px;" class="btn btn-warning lg-6 " >Vazgec
                    </a>
                    <button type="submit" class=" btn-flat btn-success btn btn-right lg-6">Guncelle</button>

                </div>

        </form>
    </div>





<?php $this->load->view('back/include/footer');?>