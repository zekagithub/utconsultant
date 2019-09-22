<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Mesaj sehifesi</h3>
        </div>
        <!-- /.box-header -->


        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('back/aboutupdate');  ?>" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Hakkimizda baslik _tr</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title_tr"  value="<?php echo $melumat->about_title_tr; ?>" >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>      <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda baslik_en</label>
                    <div class="col-sm-10">
                        <input type="text" name="title_en" class="form-control" value="<?php echo $melumat->about_title_en; ?>"  >
                    </div>
                </div>      <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">hakkimizda metin_tr</label>
                    <div class="col-sm-10">
                        <textarea name="metin_tr" id="metin" class="ckeditor"><?php echo $melumat->about_text_tr; ?></textarea>
                    </div>
                </div>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda metin_en</label>
                    <div class="col-sm-10">
                        <textarea name="metin_en" id="metin" class="ckeditor"><?php echo $melumat->about_text_en; ?></textarea>
                    </div>
                </div>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda mission_tr</label>
                    <div class="col-sm-10">
                        <textarea name="mission_tr" id="metin" class="ckeditor"><?php echo $melumat->about_mission_tr; ?></textarea>
                    </div>
                </div>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda mission_en</label>
                    <div class="col-sm-10">
                        <textarea name="mission_en" id="metin" class="ckeditor"><?php echo $melumat->about_mission_en; ?></textarea>
                    </div>
                </div>
<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda vision_tr</label>
                    <div class="col-sm-10">
                        <textarea name="vision_tr" id="metin" class="ckeditor"><?php echo $melumat->about_vision_tr; ?></textarea>
                    </div>
                </div>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda vision_en</label>
                    <div class="col-sm-10">
                        <textarea name="vision_en" id="metin" class="ckeditor"><?php echo $melumat->about_vision_en; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">hakkimizda fofotgraf</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control"  >
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Movcud Sekil</label>
                        <div class="col-sm-7">
                            <img src="<?php echo base_url($melumat->about_image); ?>" style="width: 70px;height:70px; ">
                            <p class="text-blue">Deyisdirmeseniz sekil secmeyin</p>
                        </div>
                    </div>
                </div>






            </div>

            <div class="form-group">
                <a type="submit" href="<?=base_url('back/about');?>" class="btn btn-warning lg-6 " >Legv et
                </a>
                <button type="submit" class=" btn-flat btn-success btn btn-right lg-6">Elave et</button>

            </div>

        </form>
    </div>





<?php $this->load->view('back/include/footer');?>