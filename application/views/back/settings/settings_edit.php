<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Mesaj sehifesi</h3>
        </div>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('back/settingsupdate');  ?>" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site Ismi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"  value="<?php echo $melumat->site_title; ?>" >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site url</label>
                    <div class="col-sm-10">
                        <input type="text" name="url" class="form-control" value="<?php echo $melumat->site_url; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Site adres</label>
                    <div class="col-sm-10">
                        <input type="text" name="adress" class="form-control" value="<?php echo $melumat->adress; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Site adres2</label>
                    <div class="col-sm-10">
                        <input type="text" name="adress2" class="form-control" value="<?php echo $melumat->adress2; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="mail" class="form-control" value="<?php echo $melumat->mail; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site telefon</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" value="<?php echo $melumat->site_url; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site description</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc" class="form-control" value="<?php echo $melumat->site_desc; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Site keywords</label>
                    <div class="col-sm-10">
                        <input type="text" name="keywords" class="form-control" value="<?php echo $melumat->site_keywords; ?>"  >
                    </div>
                </div>


            <div class="form-group">
                <a type="submit" href="<?=base_url('back/settings');?>" class="btn btn-warning lg-6 " >Legv et
                </a>
                <button type="submit" class=" btn-flat btn-success btn btn-right lg-6">Elave et</button>

            </div>

        </form>
    </div>





<?php $this->load->view('back/include/footer');?>