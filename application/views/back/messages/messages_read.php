<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Mesaj sehifesi</h3>
        </div>
        <!-- /.box-header -->


        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('back/settingsupdate');  ?>" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isimi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" disabled name="name"  value="<?php echo $melumat->name; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Numarasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" disabled class="form-control" value="<?php echo $melumat->phone; ?>"  >
                    </div>
                </div>      <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Mail adresi</label>
                    <div class="col-sm-10">
                        <input type="text" name="mail" disabled class="form-control" value="<?php echo $melumat->mail; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mesaji</label>
                    <div class="col-sm-10">
                        <textarea rows="3" name="message" disabled id="editor1" class="form-control"><?php echo $melumat->message ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tarih</label>
                    <div class="col-sm-10">
                        <input type="text" name="tarih" disabled class="form-control" value="<?php echo $melumat->message_date; ?>"  >
                    </div>
                </div>



                <div style="padding-left: 30px;" class="form-group">
                    <a type="submit" href="<?=base_url('back/messages');?>" class="btn btn-warning lg-6 " >Geri dön
                    </a>

                </div>

        </form>
    </div>





<?php $this->load->view('back/include/footer');?>