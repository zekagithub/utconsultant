<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>

    <div class="card mb-3">
        <div class="card-header">
            <div style="float: right;margin-right: 150px;" class="pull-right">
                <a href="<?php echo base_url('back/slideradd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Elave et</a>

            </div>
        </div>

        <?php echo $this->session->flashdata('success');  ?>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Slider Isimi</th>
                        <th>Slider Resmi</th>
                        <th>Slider aciklama</th>

                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->slider_name_tr;?></td>
                            <td><img  src="<?php echo base_url();echo $melumat->slider_image;?> "style="width: 80px; height: 60px;"></td>
                            <td><?php  echo  $melumat->slider_desc_tr;?></td>

                            <td>
                                <a href="<?php echo base_url('back/slideredit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Duzenle</button></a>
                                <a href="<?php echo base_url('back/sliderdelete/'.$melumat->id.'/id/slider'); ?>" <button class="btn btn-danger">Sil</button>


                            </td>
                        </tr>
                    <?php endforeach;  ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

<?php $this->load->view('back/include/footer');?>